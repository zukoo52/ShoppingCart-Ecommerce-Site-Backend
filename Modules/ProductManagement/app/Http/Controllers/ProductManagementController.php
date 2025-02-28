<?php

namespace Modules\ProductManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use Modules\ProductManagement\app\Entities\Product;
use Modules\ProductManagement\app\Repositaries\ProductInterface;
use Modules\ProductManagement\app\Http\Requests\AddProductRequest;
use Modules\ProductManagement\app\Http\Requests\UpdateProductRequest;

class ProductManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $interface;

    public function __construct(ProductInterface $interface)
    {
        $this->interface = $interface;
    }

    public function index()
    {

        try {

            $response =  $this->interface->index();

            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productmanagement::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductRequest $request)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->store($validateddata);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('productmanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('productmanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        try {
            $response =  $this->interface->delete($id);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
