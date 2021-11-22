<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/


Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::get('/', 'AdminDashboardController@index')->name('admin.home');
    // Route::get('/', [AdminDashboardController::class])->name('admin.home');

});
