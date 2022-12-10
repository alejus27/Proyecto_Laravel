<?php

use App\Http\Controllers\AttentionController;
use App\Http\Controllers\AttentionServiceController;
use App\Http\Controllers\CartMedicineController;
use App\Http\Controllers\clinicalHistoryController;
use App\Http\Controllers\MedicineDetailController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetOwnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\VeterinaryController;
use App\Http\Controllers\SecurityController;
use App\Models\Diagnosis;
use App\Models\Veterinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(SecurityController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::controller(CartMedicineController::class)->group(function () {
    Route::get('cartMedicine','index'); //Para obtener todos
    Route::get('cartMedicine/{id}', 'show'); //Para consultar especifico
    Route::post('cartMedicine', 'store'); //Para guardar
    Route::put('cartMedicine/{id}', 'update'); //Para actualizar
});

Route::controller(MedicineDetailController::class)->group(function () {
    Route::get('medicineDetail','index'); //Para obtener todos
    Route::get('medicineDetail/{id}', 'show'); //Para consultar especifico
    Route::post('medicineDetail', 'store'); //Para guardar
    Route::put('medicineDetail/{id}', 'update'); //Para actualizar
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
    Route::get('petOwner','index');//->middleware(['user-access']);     
    Route::get('petOwner/{id}', 'show');//->middleware(['user-access']);
    Route::post('petOwner', 'store'); //Para guardar
    Route::put('petOwner/{id}', 'update'); //Para actualizar
});

Route::controller(ShoppingCartController::class)->group(function () {
    Route::get('shoppingCart','index'); //Para obtener todos
    Route::get('shoppingCart/{id}', 'show'); //Para consultar especifico
    Route::post('shoppingCart', 'store'); //Para guardar
    Route::put('shoppingCart/{id}', 'update'); //Para actualizar
});

Route::controller(AttentionController::class)->group(function () {
    Route::get('attention','index'); //Para obtener todos
    Route::get('attention/{id}', 'show'); //Para consultar especifico
    Route::post('attention', 'store'); //Para guardar
    Route::put('attention/{id}', 'update'); //Para actualizar
});

Route::controller(AttentionServiceController::class)->group(function () {
    Route::get('attentionService','index'); //Para obtener todos
    Route::get('attentionService/{id}', 'show'); //Para consultar especifico
    Route::post('attentionService', 'store'); //Para guardar
    Route::put('attentionService/{id}', 'update'); //Para actualizar
});

Route::controller(Diagnosis::class)->group(function () {
    Route::get('diagnosis','index'); //Para obtener todos
    Route::get('diagnosis/{id}', 'show'); //Para consultar especifico
    Route::post('diagnosis', 'store'); //Para guardar
    Route::put('diagnosis/{id}', 'update'); //Para actualizar
});

Route::controller(PetController::class)->group(function () {
    Route::get('pet','index'); //Para obtener todos
    Route::get('pet/{id}', 'show'); //Para consultar especifico
    Route::post('pet', 'store'); //Para guardar
    Route::put('pet/{id}', 'update'); //Para actualizar
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('service','index'); //Para obtener todos
    Route::get('service/{id}', 'show'); //Para consultar especifico
    Route::post('service', 'store'); //Para guardar
    Route::put('service/{id}', 'update'); //Para actualizar
});

Route::controller(VeterinaryController::class)->group(function () {
    Route::get('veterinary','index'); //Para obtener todos
    Route::get('veterinary/{id}', 'show'); //Para consultar especifico
    Route::post('veterinary', 'store'); //Para guardar
    Route::put('veterinary/{id}', 'update'); //Para actualizar
});

Route::controller(clinicalHistoryController::class)->group(function () {
    Route::get('clinicalhistory','index'); //Para obtener todos
    Route::get('clinicalhistory/{id}', 'show'); //Para consultar especifico
    Route::post('clinicalhistory', 'store'); //Para guardar
    Route::put('clinicalhistory/{id}', 'update'); //Para actualizar
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});