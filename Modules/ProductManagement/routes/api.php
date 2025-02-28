<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductManagement\app\Http\Controllers\ProductManagementController;

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
    Route::apiResource('productmanagement', ProductManagementController::class)->names('productmanagement');
});

Route::post('storeproduct', [ProductManagementController::class, 'store']);
Route::get('allproducts', [ProductManagementController::class, 'index']);
Route::put('updateproduct/{id}', [ProductManagementController::class, 'update']);
Route::delete('deleteproducts/{id}', [ProductManagementController::class, 'destroy']);
