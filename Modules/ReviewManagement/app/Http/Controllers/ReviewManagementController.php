<?php

namespace Modules\ReviewManagement\app\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\ReviewManagement\app\Entities\reviews;
use Modules\ReviewManagement\app\Repositaries\ReviewInterface;
use Modules\ReviewManagement\app\Http\Requests;
use Modules\ReviewManagement\app\Http\Requests\AddReviewRequest;
use Modules\ReviewManagement\app\Http\Requests\UpdateReviewRequest;


class ReviewManagementController extends Controller
{
    protected $interface;


    public function __construct(ReviewInterface $interfce)
    {
        $this->interface = $interfce;
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


    public function store(AddReviewRequest $request)
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



    public function update(UpdateReviewRequest $request, reviews $id)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata, $id);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function destroy(reviews $id)
    {
        try {
            $this->interface->delete($id);
            return response()->json([
                'data' => "SuccesFully Deleted"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
