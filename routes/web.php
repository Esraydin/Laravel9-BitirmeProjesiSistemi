<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test comment
*/
//1-do something in route
Route::get('/hello', function () {
    return 'hello world';
});
// 2- call view in route
Route::get('/Welcome', function () {
    return view('welcome');
});
//3-call controller function
Route::get('/',[HomeController::class,'index'])->name('home');
//4-Route->controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//5-route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
//6-route with save
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Admin Panel Routes
Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');
