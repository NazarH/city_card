<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;


Route::group(['namespace' => 'Admin'], function(){
    Route::get('/login/admin-auth', [AdminLoginController::class, 'store'])->name('admin.login');
});
