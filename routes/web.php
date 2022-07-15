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

/*
/ Showing how to pass params on the URI and using them. 
/   Applied regex to accepet only numbers and only letters with `where` method
/
/ Route::get('/contact/{name}/{category_id}', function (string $name) {
/     echo "Hello world, I'm: " . $name;
/ })->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');
*/

Route::get('/', 'MainController@main')->name('site.index');

Route::get('/about', 'AboutController@about')->name('site.about');

Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@contact')->name('site.contact');

Route::prefix('/app')->group(function() {
    Route::get('/clients', function () {
        return 'clients';
    })->name('site.clients');
    
    Route::get('/suppliers', 'SupplierController@index')->name('app.suppliers');
    
    Route::get('/products', function () {
        return 'products';
    })->name('site.products');

});

Route::get('test/{p1}/{p2}', 'TestController@test')->name('site.test');

// FALLBACK PAGE
Route::fallback( function() {
    echo 'Route does not exist. <a href="'.route('site.index').'">click here</a>';
}); 
