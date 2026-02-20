<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Registrations\Harvest\{AgriculturalYearController, CropController,CultureController, VarietyCultureController};
use App\Http\Controllers\Api\Registrations\Propertie\{OwnerController, ProducerController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/login', [AuthController::class, 'login']);





Route::group(['middleware' => ['auth:sanctum']], function () {

Route::resource('/registrations/harvest/agricultural-years', AgriculturalYearController::class);
Route::resource('/registrations/harvest/cultures', CultureController::class);
Route::resource('/registrations/harvest/crops', CropController::class);
Route::resource('/registrations/harvest/varieties', VarietyCultureController::class);

Route::resource('/registrations/properties/owners', OwnerController::class);
Route::resource('/registrations/properties/producers', ProducerController::class);

Route::post('/auth/logout', [AuthController::class, 'logout']);

});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
