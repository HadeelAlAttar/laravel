<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/oday',function(){
   echo 'Hello my name is Oday';
});

Route::get('/quiz1',function(){
    $name = 'Oday';
    $job = 'Programmer';
    echo 'Name is '.$name . 'And Job is '.$job;
 });

 Route::get('/home',function(){
    $user = 'larevel';
    return view ('home',compact('user'));
 });

 Route::post('/store',function(){
    $name=request('username');
    echo "Welcome" . " " . $name;
 });

 Route::get('/login',function(){
   return view('login');
});

Route::get('/blank',function(){
   return view('blank');
});

Route::get('/dashboared' , [HomeController::class, 'index']);

// Route::get('/employee' , [EmpController::class, 'index']);

// Route::get('/employee/create' , [EmpController::class, 'create']);

// Route::post('/save_emp' , [EmpController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::resource('employee',EmpController::class);

Route::resource('products',ProductController::class);

Route::resource('authors',AuthorController::class);

Route::resource('books',BookController::class);
