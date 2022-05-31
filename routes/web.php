<?php


use App\Http\Controllers\AdminPanel\AdminProjectController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

// 1- Do sth in route
Route::get('/hello', function () {
    return 'Hello World';
});

// 2-Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- Call controller function
Route::get('/', [HomeController::class, 'index'])->name(name: 'home');

// 4- Route -> Controller -> view
Route::get('/test', [HomeController::class, 'test'])->name(name: 'test');

// 5- Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name(name: 'param');

// 6- Route with post
Route::post('/save', [HomeController::class, 'save'])->name(name: 'save');
Route::get('/project/{id}', [HomeController::class, 'project'])->name(name: 'project');
Route::get('/categoryprojects/{id}/{slug}', [HomeController::class, 'categoryprojects'])->name(name: 'categoryprojects');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//.................... Admin Panel Routes...........................
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');


// ....................Admin Category Routes........................
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
});
// ....................Admin Project Routes........................
Route::prefix('/project')->name('project.')->controller(AdminProjectController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
});
//..................... Admin Project Image Gallery Routes........................
Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
    Route::get('/{pid}', 'index')->name('index');
    Route::post('/store/{pid}', 'store')->name('store');
    Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');

});
});

