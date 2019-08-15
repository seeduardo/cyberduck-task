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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompaniesController');

Route::get('/companies/{company}/employees', 'EmployeesController@index')->name('companyEmployees');
Route::get('/companies/{company}/employees/create', 'EmployeesController@create');
Route::post('/companies/{company}/employees', 'EmployeesController@store');
Route::get('/employees/{employee}', 'EmployeesController@show');
Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
Route::patch('/employees/{employee}', 'EmployeesController@update');
Route::delete('/employees/{employee}', 'EmployeesController@destroy');
