<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\VendorController;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\StripePaymentController;



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
    return view('home');
});

Route::post('/customlogin',[LoginController::class, 'process_login'])->name('custom_login');
Route::get('/register', function () {
    return view('register');
});

Route::get('/guest-rewards', function () {
    return view('guestrewards');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sysadmin', function () {
    return view('/includes/creation_form/sysadmin');
});

Route::get('/payment_done', function () {
    return view('/includes/booking_details/payment_done');
});


Route::get('/webp', function () {

    return view('/webp');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

