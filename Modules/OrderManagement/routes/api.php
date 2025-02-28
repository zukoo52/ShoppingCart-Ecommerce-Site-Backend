<?php

use Illuminate\Support\Facades\Route;
use Modules\OrderManagement\app\Http\Controllers\OrderManagementController;

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
    Route::apiResource('ordermanagement', OrderManagementController::class)->names('ordermanagement');
});



Route::post('storeorder', [OrderManagementController::class, 'store']);
Route::get('allorders', [OrderManagementController::class, 'index']);
Route::put('updateorder/{id}', [OrderManagementController::class, 'update']);
Route::get('deleteorder/{id}', [OrderManagementController::class, 'destroy']);

