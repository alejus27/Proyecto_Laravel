<?php

use App\Http\Controllers\CartMedicineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetOwnerController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(CartMedicineController::class)->group(function () {
    Route::get('cartMedicine','index'); //Para obtener todos
    Route::get('cartMedicine/{id}', 'show'); //Para consultar especifico
    Route::post('cartMedicine', 'store'); //Para guardar
    Route::put('cartMedicine/{id}', 'update'); //Para actualizar
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('category','index'); //Para obtener todos
    Route::get('category/{id}', 'show'); //Para consultar especifico
    Route::post('category', 'store'); //Para guardar
    Route::put('category/{id}', 'update'); //Para actualizar
});

Route::controller(MedicineController::class)->group(function () {
    Route::get('medicine','index'); //Para obtener todos
    Route::get('medicine/{id}', 'show'); //Para consultar especifico
    Route::post('medicine', 'store'); //Para guardar
    Route::put('medicine/{id}', 'update'); //Para actualizar
});

Route::controller(OrderController::class)->group(function () {
    Route::get('order','index'); //Para obtener todos
    Route::get('order/{id}', 'show'); //Para consultar especifico
    Route::post('order', 'store'); //Para guardar
    Route::put('order/{id}', 'update'); //Para actualizar
});

Route::controller(PetOwnerController::class)->group(function () {
    Route::get('petOwner','index'); //Para obtener todos
    Route::get('petOwner/{id}', 'show'); //Para consultar especifico
    Route::post('petOwner', 'store'); //Para guardar
    Route::put('petOwner/{id}', 'update'); //Para actualizar
});

Route::controller(ShoppingCartController::class)->group(function () {
    Route::get('shoppingCart','index'); //Para obtener todos
    Route::get('shoppingCart/{id}', 'show'); //Para consultar especifico
    Route::post('shoppingCart', 'store'); //Para guardar
    Route::put('shoppingCart/{id}', 'update'); //Para actualizar
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});