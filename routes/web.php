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

//Route::get('adduser',function(){
 //   $data=App\Models\Employee::all();
  //  return view('saveuser')->with('employees',$data);
//}) ; 

Route::post('/saveuser',[UserController::class,'store']); 

//Route::post('login',[HomeController::class,'index']);

//Route::get('register', function () {
//    return view('register');
//});

//Route::get('home', function () {
//    return view('home');
//});

Route::get('/',[LoginController::class,'index']);
Route::get('/Enter',[LoginController::class,'index']);
Route::post('/Enter/logto',[LoginController::class,'create']);
Route::post('/Enter/regto',[LoginController::class,'register']);
Route::post('/Enter/register',[LoginController::class,'gohome']);
//Route::post('/Enter/success',[LoginController::class,'gohome']);


Route::post('register',[RegisterContoller::class,'store']);



Route::post('/User/adduser',[EmployeeController::class,'index']);
//Route::post('/User/saveuser',[EmployeeController::class,'view']);
Route::post('/User/saveuser',function(){
   $data=App\Models\Employee::all();
    return view('User/saveuser')->with('employees',$data);
}) ;
//Route::get('/User/saveuser',[EmployeeController::class,'store']);

//Route::get('/User/adduser',[EmployeeController::class,'store']);

