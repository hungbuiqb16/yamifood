<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@showIndex')->name('home');

Route::get('booking','BookingController@booking')->name('booking');
Route::post('booking','BookingController@setBooking')->name('set.booking');

Route::get('/login','AuthController@getLogin');

Route::post('/login','AuthController@postLogin')->name('login');

Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/dashboard','AuthController@dashboard')->name('dashboard')->middleware('login.admin');

Route::group(['prefix' => 'dashboard', 'middleware' => 'login.admin'], function() {
	//Slide
    Route::group(['prefix' => 'slide'], function() {
        Route::get('/','SlideController@listSlide')->name('listslide');
        Route::get('add','SlideController@addSlide')->name('addslide');
        Route::post('add','SlideController@insertSlide')->name('insertSlide');
        Route::get('edit/{id}','SlideController@editSlide');
        Route::post('update/{id}','SlideController@updateSlide')->name('updateSlide');
        Route::get('delete/{id}','SlideController@deleteSlide');
        Route::get('updateslidestatus/{id}','SlideController@updateStatusSlide');

    });
    //Product
    Route::group(['prefix' => 'product'], function() {
    	Route::get('/','ProductController@listProduct')->name('listproduct');
        Route::get('add','ProductController@addProduct')->name('addproduct');
        Route::post('add','ProductController@insertProduct')->name('insertproduct');
        Route::get('edit/{id}','ProductController@editProduct');
        Route::post('update/{id}','ProductController@updateProduct')->name('updateproduct');
        Route::get('delete/{id}','ProductController@deleteProduct');
    });

    Route::group(['prefix' => 'gallery'], function() {
    	Route::get('/','GalleryController@listImage')->name('gallery');
        Route::get('add','GalleryController@addImage')->name('addimage');
        Route::post('add','GalleryController@insertImage')->name('insertimage');
        Route::get('delete/{id}','GalleryController@deleteImage');
    });

    Route::group(['prefix' => 'preview'], function() {
    	Route::get('/','PreviewController@listPreview')->name('listpreview');
        Route::get('add','PreviewController@addPreview')->name('addpreview');
        Route::post('add','PreviewController@insertPreview')->name('insertpreview');
        Route::get('edit/{id}','PreviewController@editPreview');
        Route::post('update/{id}','PreviewController@updatePreview')->name('updatepreview');
        Route::get('delete/{id}','PreviewController@deletePreview');
        Route::get('updatepreviewstatus/{id}','PreviewController@updateStatusPreview');       //
    });

    Route::group(['prefix' => 'booking'], function() {
    	Route::get('/','BookingController@listBooking')->name('list.booking');
        Route::get('add','GalleryController@addImage')->name('addimage');
        Route::post('add','GalleryController@insertImage')->name('insertimage');
        Route::get('delete/{id}','BookingController@deleteBooking');
        Route::get('change/status/{id}','BookingController@updateStatusBooking');
    });
});