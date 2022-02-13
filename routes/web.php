<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

Route::get('/', 'App\Http\Controllers\HomeController@guests')->name('public');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('cars/all', [App\Http\Controllers\HomeController::class, 'cars'])->name('carslist');
Route::get('cars/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('cardetails');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [App\Http\Controllers\HomeController::class, 'contactpost'])->name('contactus');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::post('company', ['as' => 'company.store', 'uses' => 'App\Http\Controllers\CompaniesControllers@store']);
	Route::get('company/delete/{id}', ['as' => 'company.delete', 'uses' => 'App\Http\Controllers\CompaniesControllers@destroy']);
	Route::post('menus', ['as' => 'menus.store', 'uses' => 'App\Http\Controllers\MenusController@store']);
	Route::get('menus/delete/{id}', ['as' => 'menus.delete', 'uses' => 'App\Http\Controllers\MenusController@destroy']);
	Route::get('cars', ['as' => 'cars.create', 'uses' => 'App\Http\Controllers\CarsController@create']);
	Route::post('cars', ['as' => 'cars.store', 'uses' => 'App\Http\Controllers\CarsController@store']);
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		//get quries data from database
		$data = DB::table('queries')->get()->toArray();
		return view('pages.tables', compact('data'));
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});