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
            Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('admin.market.category.destroy');
        });

        //Brand
        Route::prefix('brand')->group(function(){
            Route::get('/', 'BrandController@index')->name('admin.market.brand.index');
            Route::get('/create', 'BrandController@create')->name('admin.market.brand.create');
            Route::post('/store', 'BrandController@store')->name('admin.market.brand.store');
            Route::get('/edit/{id}', 'BrandController@edit')->name('admin.market.brand.edit');
            Route::put('/update/{id}', 'BrandController@update')->name('admin.market.brand.update');
            Route::delete('/destroy/{id}', 'BrandController@destroy')->name('admin.market.brand.destroy');
        });
        //Comment
        Route::prefix('comment')->group(function(){
            Route::get('/', 'CommentController@index')->name('admin.market.comment.index');
            Route::get('/show', 'CommentController@show')->name('admin.market.comment.show');
            Route::post('/store', 'CommentController@store')->name('admin.market.comment.store');
            Route::get('/edit/{id}', 'CommentController@edit')->name('admin.market.comment.edit');
            Route::put('/update/{id}', 'CommentController@update')->name('admin.market.comment.update');
            Route::delete('/destroy/{id}', 'CommentController@destroy')->name('admin.market.comment.destroy');
        });
        //Delivery
        Route::prefix('delivery')->group(function(){
            Route::get('/', 'DeliveryController@index')->name('admin.market.delivery.index');
            Route::get('/create', 'DeliveryController@create')->name('admin.market.delivery.create');
            Route::post('/store', 'DeliveryController@store')->name('admin.market.delivery.store');
            Route::get('/edit/{id}', 'DeliveryController@edit')->name('admin.market.delivery.edit');
            Route::put('/update/{id}', 'DeliveryController@update')->name('admin.market.delivery.update');
            Route::delete('/destroy/{id}', 'DeliveryController@destroy')->name('admin.market.delivery.destroy');
        });
        //Discount
        Route::prefix('discount')->group(function(){
            Route::get('/copan', 'DiscountController@copan')->name('admin.market.discount.copan');
            Route::get('/copan/create', 'DiscountController@copanCreate')->name('admin.market.discount.copan.create');
            Route::get('/common-discount', 'DiscountController@commonDiscount')->name('admin.market.discount.commonDiscount');
            Route::get('/common-discount/create', 'DiscountController@commonDiscountCreate')->name('admin.market.discount.commonDiscount.create');
            Route::get('/amazing-sale', 'DiscountController@amazingSale')->name('admin.market.discount.amazingSale');
            Route::get('/amazing-sale/create', 'DiscountController@amazingSaleCreate')->name('admin.market.discount.amazingSale.create');
        });
        //Order
        Route::prefix('order')->group(function(){
            Route::get('/', 'OrderController@all')->name('admin.market.order.all');
            Route::get('/new-order', 'OrderController@newOrders')->name('admin.market.order.newOrders');
            Route::get('/sending', 'OrderController@sending')->name('admin.market.order.sending');
            Route::get('/unpaid', 'OrderController@unpaid')->name('admin.market.order.unpaid');
            Route::get('/canceled', 'OrderController@canceled')->name('admin.market.order.canceled');
            Route::get('/returned', 'OrderController@returned')->name('admin.market.order.returned');
            Route::get('/show', 'OrderController@show')->name('admin.market.order.show');
            Route::get('/change-send-status', 'OrderController@changeSendStatus')->name('admin.market.order.changeSendStatus');
            Route::get('/change-order-status', 'OrderController@changeOrderStatus')->name('admin.market.order.changeOrderStatus');
            Route::get('/cancel-order', 'OrderController@cancelOrder')->name('admin.market.order.cancelOrder');
        });
        //Payment
        Route::prefix('payment')->group(function(){
            Route::get('/', 'PaymentController@index')->name('admin.market.payment.index');
            Route::get('/online', 'PaymentController@online')->name('admin.market.payment.online');
            Route::get('/offline', 'PaymentController@offline')->name('admin.market.payment.offline');
            Route::get('/attendence', 'PaymentController@attendence')->name('admin.market.payment.attendence');
            Route::get('/confirm', 'PaymentController@confirm')->name('admin.market.payment.confirm');

        });
        //Product
        Route::prefix('product')->group(function(){
            Route::get('/', 'ProductController@index')->name('admin.market.product.index');
            Route::get('/create', 'ProductController@create')->name('admin.market.product.create');
            Route::post('/store', 'ProductController@store')->name('admin.market.product.store');
            Route::get('/edit/{id}', 'ProductController@edit')->name('admin.market.product.edit');
            Route::put('/update/{id}', 'ProductController@update')->name('admin.market.product.update');
            Route::delete('/destroy/{id}', 'ProductController@destroy')->name('admin.market.product.destroy');
            //Gallery
            Route::get('/gallery', 'GalleryController@index')->name('admin.market.gallery.index');
            Route::post('/gallery/store', 'GalleryController@store')->name('admin.market.gallery.store');
            Route::delete('/gallery/destroy/{id}', 'GalleryController@destroy')->name('admin.market.gallery.destroy');

        });

        //Property
        Route::prefix('property')->group(function(){
            Route::get('/', 'PropertyController@index')->name('admin.market.property.index');
            Route::get('/create', 'PropertyController@create')->name('admin.market.property.create');
            Route::post('/store', 'PropertyController@store')->name('admin.market.property.store');
            Route::get('/edit/{id}', 'PropertyController@edit')->name('admin.market.property.edit');
            Route::put('/update/{id}', 'PropertyController@update')->name('admin.market.property.update');
            Route::delete('/destroy/{id}', 'PropertyController@destroy')->name('admin.market.property.destroy');
        });
        //Store
        Route::prefix('store')->group(function(){
            Route::get('/', 'StoreController@index')->name('admin.market.store.index');
            Route::get('/add-to-store', 'StoreController@addToStore')->name('admin.market.store.add-to-store');
            Route::post('/store', 'StoreController@store')->name('admin.market.store.store');
            Route::get('/edit/{id}', 'StoreController@edit')->name('admin.market.store.edit');
            Route::put('/update/{id}', 'StoreController@update')->name('admin.market.store.update');
            Route::delete('/destroy/{id}', 'StoreController@destroy')->name('admin.market.store.destroy');
        });


    });



    Route::prefix('content')->namespace('Content')->group(function(){

        //Category
        Route::prefix('category')->group(function(){
            Route::get('/', 'CategoryController@index')->name('admin.content.category.index');
            Route::get('/create', 'CategoryController@create')->name('admin.content.category.create');
            Route::post('/store', 'CategoryController@store')->name('admin.content.category.store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.content.category.edit');
            Route::put('/update/{id}', 'CategoryController@update')->name('admin.content.category.update');
            Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('admin.content.category.destroy');
        });

        //Comment
         Route::prefix('comment')->group(function(){
             Route::get('/', 'CommentController@index')->name('admin.content.comment.index');
             Route::get('/show', 'CommentController@show')->name('admin.content.comment.show');
             Route::post('/store', 'CommentController@store')->name('admin.content.comment.store');
             Route::get('/edit/{id}', 'CommentController@edit')->name('admin.content.comment.edit');
             Route::put('/update/{id}', 'CommentController@update')->name('admin.content.comment.update');
             Route::delete('/destroy/{id}', 'CommentController@destroy')->name('admin.content.comment.destroy');
             });
        //FAQ
         Route::prefix('faq')->group(function(){
             Route::get('/', 'FAQController@index')->name('admin.content.faq.index');
             Route::get('/create', 'FAQController@create')->name('admin.content.faq.create');
             Route::post('/store', 'FAQController@store')->name('admin.content.faq.store');
             Route::get('/edit/{id}', 'FAQController@edit')->name('admin.content.faq.edit');
             Route::put('/update/{id}', 'FAQController@update')->name('admin.content.faq.update');
             Route::delete('/destroy/{id}', 'FAQController@destroy')->name('admin.content.faq.destroy');
             });
        //Menu
         Route::prefix('menu')->group(function(){
             Route::get('/', 'MenuController@index')->name('admin.content.menu.index');
             Route::get('/create', 'MenuController@create')->name('admin.content.menu.create');
             Route::post('/store', 'MenuController@store')->name('admin.content.menu.store');
             Route::get('/edit/{id}', 'MenuController@edit')->name('admin.content.menu.edit');
             Route::put('/update/{id}', 'MenuController@update')->name('admin.content.menu.update');
             Route::delete('/destroy/{id}', 'MenuController@destroy')->name('admin.content.menu.destroy');
             });


    });

});
