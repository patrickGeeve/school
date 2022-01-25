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

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLineController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('reservations', ReservationController::class);
Route::resource('products', ProductController::class);
Route::resource('tables', TableController::class);
Route::resource('orders', OrderController::class);
Route::resource('orders.order_lines', OrderLineController::class)->shallow();