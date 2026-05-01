<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOfferController;

Route::get('/', function () {
    return redirect()->route('jobs.index');
});

Route::resource('jobs', JobOfferController::class)->only(['index' , 'show']);
