<?php


use Illuminate\Support\Facades\Route;

$groupSettings = [
    'prefix' => 'module-installer',
    'namespace' => 'Jeroenv\EcdModuleInstaller\Http\Controllers',
];

Route::group($groupSettings, function () {

    Route::get('/get-data', 'ModuleDataController@getModuleData')->name('get-module-data');

});
