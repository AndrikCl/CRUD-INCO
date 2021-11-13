<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('layouts.template');
});




Auth::routes();


// LINEAS DE CODIGO Q YA NO DEJA INGRESAR A  NADIE QUE NO ESTE AUTENTICADO EN EL LOGIN ->middleware('auth');
Route::resource('suppliers', App\Http\controllers\supplierController::class)->middleware('auth');
Route::resource('clients', App\Http\controllers\clientController::class)->middleware('auth');
Route::resource('employeepositions', App\Http\controllers\employeepositionController::class)->middleware('auth');
Route::resource('products', App\Http\controllers\productController::class)->middleware('auth');
Route::resource('employees', App\Http\controllers\employeeController::class)->middleware('auth');
Route::resource('entries', App\Http\controllers\EntryController::class)->middleware('auth');
Route::resource('outputs', App\Http\controllers\outputController::class)->middleware('auth');
Route::resource('invoices', App\Http\controllers\invoiceController::class)->middleware('auth');
Route::resource('details', App\Http\controllers\detailController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
