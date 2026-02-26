<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Registrations\Agricultural\{AgriculturalOperatorController, TypeOperationController};
use App\Http\Controllers\Api\Registrations\Harvest\{AgriculturalYearController, CropController, CultureController, VarietyCultureController};
use App\Http\Controllers\Api\Registrations\Products\ProductGroupController;
use App\Http\Controllers\Api\Registrations\Propertie\{OwnerController, ProducerController};
use App\Http\Controllers\Api\Registrations\Propertie\Areas\{FarmController, FieldController, MatrixFreightController, PlotFieldController};
use App\Http\Controllers\Api\Registrations\Supplier\{DriverController, EmployeeController, LanyardController, SupplierController, TypeSupplierController, WarehouseController};
use App\Http\Controllers\Api\Registrations\Vehicle\{FleetBrandController, FleetController, FleetGroupController, FleetModelController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/login', [AuthController::class, 'login']);





Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::resource('/registrations/harvest/agricultural-years', AgriculturalYearController::class);
    Route::resource('/registrations/harvest/cultures', CultureController::class);
    Route::resource('/registrations/harvest/crops', CropController::class);
    Route::get('/registrations/harvest/crops/cultures/{cropsId}', [CropController::class, 'getCropByCulture']);
    Route::resource('/registrations/harvest/varieties', VarietyCultureController::class);
    Route::get('/registrations/harvest/cultures/varieties/{varietieId}', [VarietyCultureController::class,'getVarietyCultureByCulture']);

    Route::resource('/registrations/properties/owners', OwnerController::class);
    Route::resource('/registrations/properties/producers', ProducerController::class);
    Route::resource('/registrations/properties/areas/farms', FarmController::class);
    Route::get('/registrations/properties/areas/farms/free_area/{farmId}', [FarmController::class,'free_area']);
    Route::resource('/registrations/properties/areas/fields', FieldController::class);
    

    Route::resource('/registrations/properties/areas/plot-fields', PlotFieldController::class);
    Route::get('/registrations/properties/areas/fields/free_area/{cropId}/{fieldId}', [PlotFieldController::class,'getFreeAreaByField']);
    Route::resource('/registrations/properties/areas/matrix-freights', MatrixFreightController::class);

    Route::resource('/registrations/suppliers/type-suppliers', TypeSupplierController::class);
    Route::resource('/registrations/suppliers/suppliers', SupplierController::class);
    Route::resource('/registrations/suppliers/warehouses', WarehouseController::class);
    Route::resource('/registrations/suppliers/lanyards', LanyardController::class);
    Route::resource('/registrations/suppliers/drivers', DriverController::class);
    Route::resource('/registrations/suppliers/employees', EmployeeController::class);

    Route::resource('/registrations/vehicles/fleet-groups', FleetGroupController::class);
    Route::resource('/registrations/vehicles/fleet-brands', FleetBrandController::class);
    Route::resource('/registrations/vehicles/fleet-models', FleetModelController::class);
    Route::resource('/registrations/vehicles/fleets', FleetController::class);

    Route::resource('/registrations/agricultural/type-operations', TypeOperationController::class);
    Route::resource('/registrations/agricultural/agricultural-operators', AgriculturalOperatorController::class);

    Route::resource('/registrations/products/product-groups', ProductGroupController::class);

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
