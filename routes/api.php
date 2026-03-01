<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Registrations\Agricultural\{AgriculturalOperatorController, TypeOperationController};
use App\Http\Controllers\Api\Registrations\Harvest\{AgriculturalYearController, CropController, CultureController, VarietyCultureController};
use App\Http\Controllers\Api\Registrations\Product\{ProductController, ProductGroupController, PurposeProductController, SubGroupProductController};
use App\Http\Controllers\Api\Registrations\Propertie\{OwnerController, ProducerController};
use App\Http\Controllers\Api\Registrations\Propertie\Areas\{FarmController, FieldController, MatrixFreightController, PlotFieldController};
use App\Http\Controllers\Api\Registrations\Supplier\{DriverController, EmployeeController, LanyardController, SupplierController, TypeSupplierController, WarehouseController};
use App\Http\Controllers\Api\Registrations\Vehicle\{FleetBrandController, FleetController, FleetGroupController, FleetModelController};
use App\Http\Controllers\Api\Releases\Agricultural\Services\{DefensiveController};
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
    Route::resource('/registrations/products/sub-group-products', SubGroupProductController::class);
    Route::get('/registrations/products/product-groups/{productGroupId}/sub-group-products', [SubGroupProductController::class, 'getSubGroupProductsByProductGroup']);
    //registrations/products/product-groups/019c9a33-ae7c-71d7-a768-064844b1a6e2/sub-group-products
    Route::resource('/registrations/products/purpose-products', PurposeProductController::class);
    Route::resource('/registrations/products/products', ProductController::class);

    Route::resource('/entries/agricultural/defensives', DefensiveController::class);
    Route::get('/entries/agricultural/defensives/free_area/{fieldId}', [DefensiveController::class, 'getFreeArea']);
    Route::get('/entries/agricultural/defensives/order/{defensiveId}', [DefensiveController::class, 'getOrderByDefensive']);
    ///entries/agricultural/defensives/order/:id

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
