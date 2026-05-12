<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\AuthConroller;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MyJobApplicationController;

Route::get('/', function () {
    return redirect()->route('jobs.index');
});

Route::resource('jobs', JobOfferController::class)->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');

Route::resource('auth', AuthConroller::class)->only(['create', 'store']);

Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');

Route::delete('auth', [AuthConroller::class, 'destroy'])->name('auth.destroy');

Route::middleware('auth')->group(function () {
    Route::resource('jobs.applications', JobApplicationController::class)->only(['create', 'store', 'destroy']);

    Route::resource('my-applications', MyJobApplicationController::class)->only(['index', 'destroy']);
});
