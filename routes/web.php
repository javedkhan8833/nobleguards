<?php

use PhpParser\Node\Stmt\Return_;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\website\MainController;

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
//<----- admin dashboard Routes-------->
//about us routes
Route::get('/admin/about/index', [AboutController::class,'index'])->name('admin.about.index');
Route::get('/admin/about/create', [AboutController::class,'create'])->name('admin.about.create');
Route::post('/admin/about/store', [AboutController::class,'store'])->name('admin.about.store');
Route::get('/admin/about/delete/{id}', [AboutController::class,'delete'])->name('admin.about.delete');
Route::get('/admin/about/edit/{id}', [AboutController::class,'edit'])->name('admin.about.edit');
Route::post('/admin/about/update/{id}', [AboutController::class,'update'])->name('admin.about.update');

//FAQ routes
Route::get('/admin/faq/index',[FaqController::class,'index'])->name('admin.faq.index');
Route::get('/admin/faq/create',[FaqController::class,'create'])->name('admin.faq.create');
Route::post('/admin/faq/store',[FaqController::class,'store'])->name('admin.faq.store');
Route::get('/admin/faq/edit/{id}',[FaqController::class,'edit'])->name('admin.faq.edit');
Route::post('/admin/faq/update/{id}',[FaqController::class,'update'])->name('admin.faq.update');
Route::get('/admin/faq/delete/{id}',[FaqController::class,'delete'])->name('admin.faq.delete');


//website routes
Route::get('/home', [MainController::class,'index'])->name('main');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
Route::get('/courses', [MainController::class,'selectCourse'])->name('courses');
Route::get('/initial', [MainController::class,'initial'])->name('firstpage');
Route::get('/services', function(){
    return view('website.pages.services');
})->name('services');


