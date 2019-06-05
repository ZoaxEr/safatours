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

Route::get('locale', 'LocaleController@index')->name('locale');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/localang', 'PagesController@localang')->name('localang');
Route::get('/services', 'PagesController@service')->name('services');
Route::get('/about', 'PagesController@about')->name('about_us');
Route::get('/contact', 'PagesController@contact')->name('contact_us');
Route::get('/styles/{style}', 'PagesController@styles')->name('styles');

Route::POST('/contact_us', 'PagesController@contact_us')->name('contact_us_send');

Route::resource('vehicles', 'VehiclesController');
Route::POST('vehicles/search', 'VehiclesController@search')->name('vehicles.search');
Route::POST('vehicles/{slug}/rent', 'VehiclesController@rent')->name('rent');
Route::get('vehicles/{slug}/rent', 'VehiclesController@rent_view')->name('rent_view');

Auth::routes();

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin', 'admin_role')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('vehicle', '\App\Http\Controllers\Admin\VehicleCrudController');
}); 