<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add_employee_controller;
use App\Http\Controllers\add_employee_passport_controller;
use App\Http\Controllers\add_employee_contact_details_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/adding_new_employee' , [add_employee_controller::class , 'new_employee']);
Route::get('/home/adding_new_employee_passport' , [add_employee_passport_controller::class , 'new_adding_passport']);
Route::get('/home/adding_employee_contact_details',[add_employee_contact_details_controller::class , 'adding_new_contact'] );
//need make control
Route::get('/home/company', function(){
    return view('create_company_details');
});

Route::get('/home/Branch', function(){
    return view('create_new_branch');
});

Route::get('/home/Department', function(){
    return view('add_new_department');
});

Route::get('/home/create_position', function(){
    return view('create_positions');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
