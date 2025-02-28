<?php

namespace Modules\UserManagement\app\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Modules\UserManagement\app\Repositaries\UserInterface;
use Modules\UserManagement\app\Http\Requests\AddUserRequest;
use Modules\UserManagement\app\Http\Requests\UpdateUserRequest;
use Modules\UserManagement\app\Repositaries\UserImplementation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\UserManagement\app\Entities\User;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $interface;
    // contructor

    public function __construct(UserInterface $interfce)
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

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUserRequest $request)
    {
        $validateddata  = $request->validated();

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
        return view('usermanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('usermanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request,User $id)
    {
        //
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata , $id);
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
    public function destroy(User $id)
    {
        //
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