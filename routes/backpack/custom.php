<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('vehicle', 'VehicleCrudController');
    CRUD::resource('driver', 'DriverCrudController');
}); // this should be the absolute last line of this file
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin', 'admin_role')],
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes
    Route::GET('settings/id', 'SettingsController@id')->name('crud.settings.id');
    Route::GET('settings/slider', 'SettingsController@slider')->name('crud.settings.slider');
    Route::GET('settings/colors', 'SettingsController@colors')->name('crud.settings.colors');
    Route::GET('settings/contacts', 'SettingsController@contacts')->name('crud.settings.contacts');
    CRUD::resource('settings', 'SettingsController');

    Route::POST('settings/set', 'SettingsController@set')->name('crud.settings.set');
}); 

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin', 'admin_role')],
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes
    Route::GET('rents/confirmed', 'RentsController@confirmed')->name('crud.rents.confirmed');
    Route::GET('rents/cancelled', 'RentsController@cancelled')->name('crud.rents.cancelled');
    Route::GET('rents/not-reviewed', 'RentsController@not_reviewed')->name('crud.rents.not_reviewed');

    Route::PUT('rent/{rent}', 'Admin\RentCrudController@update')->name('crud.rents.update');

    CRUD::resource('rents', 'RentsController');

    Route::GET('rents/create', 'Admin\RentCrudController@create')->name('crud.rents.create');
    Route::GET('rents/{rent}/edit', 'Admin\RentCrudController@edit')->name('crud.rents.edit');
}); 