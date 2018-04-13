<?php

use App\Events\OrderStatusUpdated;

Route::get('/', function () {
    $user = factory(App\User::class)->create();

    OrderStatusUpdated::dispatch($user);
/*    the same as
    event(new OrderStatusUpdated());*/
    return view('welcome');
});
