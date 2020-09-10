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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


#naming convention 

# when we deal with anything related to employess

#get employees

#all employees
Route::post('/employees','App\Http\Controllers\EmployeesController@store');
Route::get('/employees/create','App\Http\Controllers\EmployeesController@create');

Route::get('/employees','App\Http\Controllers\EmployeesController@index');

#perform operation on single resource (show, edit, update, delete)
# /employees/{{$employee_id}}/edit
#/employees/{$employee_id}/show
Route::get('/employees/{employee}','App\Http\Controllers\EmployeesController@show');
Route::get('/employees/{employee}/edit','App\Http\Controllers\EmployeesController@edit');
Route::put('/employees/{employee}','App\Http\Controllers\EmployeesController@update');
Route::delete('/employees/{employee}/delete','App\Http\Controllers\EmployeesController@destroy');



#call view EmployeesContoller
