<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;

Route::group(['namespace' => 'User', 'prefix' => 'profile'], function(){
    Route::get('', [IndexController::class, 'index'])->name('user.index');

    Route::post('/add', [IndexController::class, 'add'])->name('user.card');
});
