<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserLoginController;

Route::group(['namespace' => 'User'], function(){
    Route::get('/login/user-auth', [UserLoginController::class, 'store'])->name('user.login');
});
