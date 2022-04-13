<?php

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
    return view('welcome');
});
//car
Route::get('/car','rental@car');
Route::get('/crate/car','rental@inp_car');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('brands', 'BrandController');

Route::resource('categories', 'CategoryController');





Route::resource('users', 'UserController');

Route::resource('cars', 'CarController');

Route::resource('customers', 'CustomerController');

Route::resource('bookings', 'BookingController');

Route::resource('testimonis', 'TestimoniController');