<?php

use App\Events\OrderStatusUpdated;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/update', function () {
    $user = factory(App\User::class)->create();

    /*    the same as
    event(new OrderStatusUpdated());*/
    OrderStatusUpdated::dispatch($user);
});
