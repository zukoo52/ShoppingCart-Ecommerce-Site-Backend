<?php

namespace Modules\OrderManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\OrderManagement\app\Repositaries\OrderInterface;
use Modules\OrderManagement\app\Http\Requests\AddOrderRequests;


class OrderManagementController extends Controller
{

    protected $interface;
    // contructor

    public function __construct(OrderInterface $interfce)
    {
        $this->interface = $interfce;
    }
    /**
     * Display a listing of the resource.
     */
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
     * Store a newly created resource in storage.
     */
    public function store(AddOrderRequests $request)
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

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateCategoryRequest $request,Category $id)
    // {
    //     $validateddata = $request->validated();
    //     try {
    //         $response =  $this->interface->update($validateddata , $id);
    //         return response()->json([
    //             'data' =>  $response
    //         ]);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Category $id)
    // {
    //     try {
    //         $response =  $this->interface->delete($id);
    //         return response()->json([
    //             'data' =>  $response
    //         ]);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }
}
