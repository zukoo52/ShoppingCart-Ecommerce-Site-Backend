<?php

use Illuminate\Support\Facades\Route;
use Modules\ReviewManagement\app\Http\Controllers\ReviewManagementController;

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
    Route::apiResource('reviewmanagement', ReviewManagementController::class)->names('reviewmanagement');
});
Route::post('storeReview', [ReviewManagementController::class, 'store']);
Route::get('allReview', [ReviewManagementController::class, 'index']);
Route::put('UpdateReview/{id}', [ReviewManagementController::class, 'update']);
Route::delete('deleteReview/{id}', [ReviewManagementController::class, 'destroy']);
