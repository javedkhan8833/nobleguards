<?php

use PhpParser\Node\Stmt\Return_;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\website\MainController;
use App\Http\Controllers\admin\CoursesController;
use App\Http\Controllers\website\ReferController;
use App\Http\Controllers\website\AboutusController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\SubscriptionController;

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


Route::get("testing",function(){
    return "farhd";
});
Route::get('admin/login',function(){
    return view('admin.pages.user.login');
})->name('loginView');
Route::post('/login',[HomeController::class,'authenticate'])->name('login');
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::post('/logout', [HomeController::class,'logout'])->name('logout');
    //<----- admin dashboard Routes-------->
    //about us routes
    Route::get('/about/index', [AboutController::class,'index'])->name('admin.about.index');
    Route::get('/about/create', [AboutController::class,'create'])->name('admin.about.create');
    Route::post('/about/store', [AboutController::class,'store'])->name('admin.about.store');
    Route::post('/about/delete/{id}', [AboutController::class,'delete'])->name('admin.about.delete');
    Route::get('/about/edit/{id}', [AboutController::class,'edit'])->name('admin.about.edit');
    Route::post('/about/update/{id}', [AboutController::class,'update'])->name('admin.about.update');

//FAQ routes
Route::get('/faq/index',[FaqController::class,'index'])->name('admin.faq.index');
Route::get('/faq/create',[FaqController::class,'create'])->name('admin.faq.create');
Route::post('/faq/store',[FaqController::class,'store'])->name('admin.faq.store');
Route::get('/faq/edit/{id}',[FaqController::class,'edit'])->name('admin.faq.edit');
Route::post('/faq/update/{id}',[FaqController::class,'update'])->name('admin.faq.update');
Route::post('/faq/delete/{id}',[FaqController::class,'delete'])->name('admin.faq.delete');

//slider routes
Route::get('/slider/index',[SliderController::class,'index'])->name('admin.slider.index');
Route::get('/slider/create',[SliderController::class,'create'])->name('admin.slider.create');
Route::post('/slider/store',[SliderController::class,'store'])->name('admin.slider.store');
Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('admin.slider.edit');
Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('admin.slider.update');
Route::post('/slider/delete/{id}',[SliderController::class,'delete'])->name('admin.slider.delete');
//contact us routes on admin side
Route::get('/contacted',[HomeController::class,'contact'])->name('admin.contactus.contacted');
Route::get('/contacted/view/{id}',[HomeController::class,'singleContactView'])->name('admin.contactus.view');
Route::post('/contacted/delete/{id}',[HomeController::class,'delete'])->name('admin.contactus.delete');

// courses routes
Route::get('/course/list',[CoursesController::class,'index'])->name('admin.course.index');
Route::get('/course/create',[CoursesController::class,'create'])->name('admin.course.create');
Route::post('/course/store',[CoursesController::class,'store'])->name('admin.course.store');
// Route::get('/admin/course/edit/{id}',[CoursesController::class,'edit'])->name('admin.course.edit');
Route::POST('/admin/course/delete/{id}',[CoursesController::class,'delete'])->name('admin.course.delete');
});
//website routes
Route::get('/', [MainController::class,'index'])->name('main');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
Route::get('/courses', [MainController::class,'selectCourse'])->name('courses');
Route::get('/initial', [MainController::class,'initial'])->name('firstpage');
Route::get('/refer/friend', [MainController::class,'referFriend'])->name('refer');
Route::post('/refered/friends', [ReferController::class,'store'])->name('refered');
Route::get('/refered/list', [MainController::class,'referedlist'])->name('admin.refered.list');
Route::post('/contactus',[ContactController::class,'store'])->name('findus');
Route::get('/aboutus/index',[AboutController::class,'index'])->name('aboutus.index');
Route::get('/aboutus/detail',[AboutusController::class,'detail'])->name('aboutus.detail');
Route::post('/subscribe', [SubscriptionController::class,'store'])->name('subscribe');
Route::get('/terms', [MainController::class,'terms'])->name('terms');
Route::get('/slider', [MainController::class,'slider'])->name('slider');





