<?php

use Illuminate\Support\Facades\Route;
 use App\http\Controllers\EmployeeController;
 use App\http\Controllers\HomeControllers;
 use App\http\Controllers\LoginController;
 use App\http\Controllers\RegisterContoller;
 use App\http\Controllers\UserController;

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

 




Route::get('/',[LoginController::class,'index']);
Route::get('/Enter',[LoginController::class,'index']);
Route::post('/Enter/logto',[LoginController::class,'create']);
Route::post('/Enter/regto',[LoginController::class,'register']);
Route::post('Enter/register',[LoginController::class,'gohome']);


Route::post('/User/adduser',[EmployeeController::class,'index']);
Route::post('/User/create',function(){
  $data=App\Models\Employee::all();
    return view('User/create')->with('employees',$data);
});
Route::post('Enter/add',[LoginController::class,'gohome']);

Route::post('add',[LoginController::class,'add']);




