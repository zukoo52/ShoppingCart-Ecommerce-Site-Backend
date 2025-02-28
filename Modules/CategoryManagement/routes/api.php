<?php

use Illuminate\Support\Facades\Route;
use Modules\CategoryManagement\app\Http\Controllers\CategoryManagementController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('categorymanagement', CategoryManagementController::class)->names('categorymanagement');
});


Route::post('storecategory', [CategoryManagementController::class, 'store']);
Route::get('allcategories', [CategoryManagementController::class, 'index']);
Route::put('updatecategory/{id}', [CategoryManagementController::class, 'update']);
Route::delete('deletecategories/{id}', [CategoryManagementController::class, 'destroy']);

