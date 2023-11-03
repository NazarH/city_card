<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TransportController;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('', [IndexController::class, 'index'])->name('admin.index');

    Route::get('/city', [CityController::class, 'index'])->name('admin.city.index');
    Route::post('/city/add', [CityController::class, 'add'])->name('admin.city.add');
    Route::delete('/city/delete/{item}', [CityController::class, 'delete'])->name('admin.city.delete');

    Route::get('/transport', [TransportController::class, 'index'])->name('admin.transport.index');
    Route::post('/transport/post', [TransportController::class, 'post'])->name('admin.transport.post');

    Route::get('/transport/edit/{item}', [TransportController::class, 'edit'])->name('admin.transport.edit');
    Route::post('/transport/edit/{item}/update', [TransportController::class, 'update'])->name('admin.transport.update');

    Route::delete('/transport/delete/{item}', [TransportController::class, 'delete'])->name('admin.transport.delete');
});
