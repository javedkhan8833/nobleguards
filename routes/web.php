<?php

use PhpParser\Node\Stmt\Return_;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\website\MainController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\ReferController;

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
    return view('admin.pages.dashboard');
});
//<----- admin dashboard Routes-------->
//about us routes
Route::get('/admin/about/index', [AboutController::class,'index'])->name('admin.about.index');
Route::get('/admin/about/create', [AboutController::class,'create'])->name('admin.about.create');
Route::post('/admin/about/store', [AboutController::class,'store'])->name('admin.about.store');
Route::post('/admin/about/delete/{id}', [AboutController::class,'delete'])->name('admin.about.delete');
Route::get('/admin/about/edit/{id}', [AboutController::class,'edit'])->name('admin.about.edit');
Route::post('/admin/about/update/{id}', [AboutController::class,'update'])->name('admin.about.update');

//FAQ routes
Route::get('/admin/faq/index',[FaqController::class,'index'])->name('admin.faq.index');
Route::get('/admin/faq/create',[FaqController::class,'create'])->name('admin.faq.create');
Route::post('/admin/faq/store',[FaqController::class,'store'])->name('admin.faq.store');
Route::get('/admin/faq/edit/{id}',[FaqController::class,'edit'])->name('admin.faq.edit');
Route::post('/admin/faq/update/{id}',[FaqController::class,'update'])->name('admin.faq.update');
Route::post('/admin/faq/delete/{id}',[FaqController::class,'delete'])->name('admin.faq.delete');

//slider routes
Route::get('/admin/slider/index',[SliderController::class,'index'])->name('admin.slider.index');
Route::get('/admin/slider/create',[SliderController::class,'create'])->name('admin.slider.create');
Route::post('/admin/slider/store',[SliderController::class,'store'])->name('admin.slider.store');
Route::get('/admin/slider/edit/{id}',[SliderController::class,'edit'])->name('admin.slider.edit');
Route::post('/admin/slider/update/{id}',[SliderController::class,'update'])->name('admin.slider.update');
Route::post('/admin/slider/delete/{id}',[SliderController::class,'delete'])->name('admin.slider.delete');
//contact us routes on admin side
Route::get('/admin/contacted',[HomeController::class,'contact'])->name('admin.contactus.contacted');
Route::get('/admin/contacted/view/{id}',[HomeController::class,'singleContactView'])->name('admin.contactus.view');
Route::post('/admin/contacted/delete/{id}',[HomeController::class,'delete'])->name('admin.contactus.delete');
//website routes
Route::get('/home', [MainController::class,'index'])->name('main');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
Route::get('/courses', [MainController::class,'selectCourse'])->name('courses');
Route::get('/initial', [MainController::class,'initial'])->name('firstpage');
Route::get('/refer/friend', [MainController::class,'referFriend'])->name('refer');
Route::post('/refered/friends', [ReferController::class,'store'])->name('refered');
Route::get('/services', function(){
    return view('website.pages.services');
})->name('services');

Route::post('/contactus',[ContactController::class,'store'])->name('findus');


