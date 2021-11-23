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

    Route::prefix('market')->namespace('Market')->group(function(){

        //category
        Route::prefix('category')->group(function(){
            Route::get('/', 'CategoryController@index')->name('admin.market.category.index');
            Route::get('/create', 'CategoryController@create')->name('admin.market.category.create');
            Route::post('/store', 'CategoryController@store')->name('admin.market.category.store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.market.category.edit');
            Route::put('/update/{id}', 'CategoryController@update')->name('admin.market.category.update');
            Route::delete('/delete/{id}', 'CategoryController@destroy')->name('admin.market.category.destroy');
        });

    });

});
