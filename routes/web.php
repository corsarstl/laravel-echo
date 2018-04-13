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

use App\Events\OrderStatusUpdated;

Route::get('/', function () {
    OrderStatusUpdated::dispatch();
/*    the same as
    event(new OrderStatusUpdated());*/
    return view('welcome');
});
