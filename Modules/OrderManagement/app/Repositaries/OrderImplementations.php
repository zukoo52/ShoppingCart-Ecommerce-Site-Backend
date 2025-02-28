<?php

namespace Modules\OrderManagement\app\Repositaries;

use Modules\CategoryManagement\app\Entities\Category;
use Modules\OrderManagement\app\Entities\Order;
use Modules\OrderManagement\app\Entities\OrderProduct;
use Modules\OrderManagement\app\Repositaries\OrderInterface;
use Modules\ProductManagement\app\Entities\Product;

class OrderImplementations implements OrderInterface
{

    // get all orders data
    public function index()
    {

        // get all orders

        $orders = Order::with('user')->get();

        // loop orders

        $responseArray = array();

        foreach ($orders as $order) {

            $orderobj = [
                'reference_id' => $order->reference_id,
                'ordered_date' => $order->created_at,
                'order_status' => $order->status,
                'ordered_items' => [],
            ];

            // get ordered products


            $orderproducts = OrderProduct::where('order_id', $order->id)->get();

            // loop ordered products

            foreach ($orderproducts as $ordproduct) {

                // get product
                $product = Product::where('id', $ordproduct->product_id)->first();
                $category = Category::where('id', $product->category_id)->first();
                $productObj = [

                    'product_code' =>  $product->product_code,

                    'product_name' =>  $product->product_name,

                    'product_price' =>  $product->product_price,

                    'product_stock_level' =>  $product->product_stock_level,


                    'category' =>  $category->category_name,
                ];


                array_push($orderobj['ordered_items'], $productObj);
            }


            array_push($responseArray,   $orderobj);
        }

        return  $responseArray;
    }

    // store Order
    public function store($data)
    {
        $data['status']  = 'Pending';
        $data['users_id']  = 1;
        // add order to order table

        $order = Order::create($data);

        // add products to order


        // $products = [ ];

        // loop  the product array

        foreach ($data['products'] as $productobj) {

            // create product order
            $productorder = new OrderProduct();
            $productorder->order_id = $order->id;
            $productorder->product_id = $productobj['id'];
            $productorder->quntity = $productobj['quantity'];
            $productorder->save();

            // reduce the stock

            $product = Product::where('id', $productobj['id'])->first();
            $product->product_stock_level = $product->product_stock_level - $productobj['quantity'];
            $product->save();
        }


        return $order;
    }

    // update Order
    public function  update($data, $id) {}


    // delete Order
    public function  delete($id)
    {
        $id->delete();
    }
}
