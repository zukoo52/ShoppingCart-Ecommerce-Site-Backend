<?php

namespace Modules\ProductManagement\app\Repositaries;

use Modules\ProductManagement\app\Entities\Product;


class ProductImplementations implements ProductInterface
{
    //get all product data
    public function index()
    {
        $finalysed_array = array();
        $products = Product::with('category')->get();

        foreach ($products as $product) {

            $product_object = [
                'category' => $product->category,
                'id' => $product->id,
                'product_code' => $product->product_code,
                'product_name' => $product->product_name,
                'product_price' => $product->product_price,
                'product_stock_level' => $product->product_stock_level,
                'quantity' => 0,
            ];

            array_push($finalysed_array, $product_object);
        }


        return $finalysed_array;
    }

    // store product
    public function store($data)
    {

        $product = new Product();

        $product->product_code = $data['product_code'];
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->category_id = $data['category_id'];
        $product->product_stock_level = $product->product_stock_level + $data['supply_qualtity'];

        $product->save();
        return $product;
    }

    // update product
    public function update($data)
    {

        $product = Product::where('id', $data['id'])->first();
        $product->product_code = $data['product_code'];
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->category_id = $data['category_id'];
        $product->product_stock_level = $product->product_stock_level + $data['supply_qualtity'];
        $product->save();

        return $product;
    }

    // delete product
    public function delete($id)
    {
        $id->delete();
    }
}
