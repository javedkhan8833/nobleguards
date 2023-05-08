<?php

use App\Http\Controllers\website\MainController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});
// admin dashboard Routes
Route::get('/admin/about', function(){
    return view('admin.pages.about');
})->name('aboutus');
Route::get('/home', [MainController::class,'index'])->name('main');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
Route::get('/courses', [MainController::class,'selectCourse'])->name('courses');
Route::get('/initial', [MainController::class,'initial'])->name('firstpage');
Route::get('/services', function(){
    return view('website.pages.services');
})->name('services');


