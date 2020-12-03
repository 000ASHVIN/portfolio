<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/linkstorage', function () {
    // Artisan::call('storage:link');
    return view('symlink');
});


Route::get('/', function () {
    return view('home');
});

Route::prefix('portfolio')->group(function() {
    Route::get('/', 'PortfolioController@index');
    // Route::post('/site', 'PortfolioController@work')->name('portfolio.site');
    Route::get('/site/{site_id}/frontend', 'PortfolioController@frontendWork');
    Route::get('/site/{site_id}/admin', 'PortfolioController@adminWork');
    Route::get('/siteInformation/{id}/show', 'PortfolioController@show');
});

Route::get('admin/register', 'Admin\RegisterController@index');
Route::post('admin/register', 'Admin\RegisterController@register');

Route::get('admin/login', 'Admin\LoginController@index');
Route::post('admin/login', 'Admin\LoginController@login');

Route::get('admin/logout', 'Admin\LoginController@logout');

Route::prefix('admin')->group(function() {
    Route::get('home', 'Admin\HomeController@index');

    Route::get('site', 'Admin\SiteController@index');
    Route::get('site/create', 'Admin\SiteController@create');
    Route::post('site/store', 'Admin\SiteController@store');
    Route::get('site/{site}/edit', 'Admin\SiteController@edit');
    Route::patch('site/{site}', 'Admin\SiteController@update');
    Route::delete('site/{site}', 'Admin\SiteController@destroy');

    Route::name('siteInformation.')->group(function() {
        Route::get('site_information', 'Admin\SiteInformationController@index');
        Route::get('site_information/create', 'Admin\SiteInformationController@create');
        Route::post('site_information/store', 'Admin\SiteInformationController@store')->name('store');
        Route::get('site_information/{siteInformation}/edit', 'Admin\SiteInformationController@edit');
        Route::patch('site_information/{siteInformation}', 'Admin\SiteInformationController@update')->name('update');
        Route::delete('site_information/{siteInformation}', 'Admin\SiteInformationController@destroy')->name('delete');
    });
});
