<?php

use Illuminate\Support\Facades\Route;

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

/*rotte utente */
Route::get('/','PageController@index')->name('guest.welcome');
Route::get('about', 'PageController@about')->name('guest.about');
Route::post('about', 'PageController@sendContactForm')->name('contacts.send');

Route::get('contact', 'PageController@contact')->name('guest.contact');
Route::post('contact', 'PageController@sendContactForm')->name('contacts.send');


//Rotte Utente Article
Route::resource('article', ArticleController::class)->only('index', 'show');


Auth::routes();

/*rotte admin */
    Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::delete('/contact/{email}', 'HomeController@responseSend')->name('contact.destroy');
        Route::resource('article', ArticleController::class);
        Route::resource('categories', CategoryController::class);
    
    });