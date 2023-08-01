<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminTrainingController;


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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/training-category',[HomeController::class,'trainingCategory'])->name('training-category');
Route::get('/all-training',[HomeController::class,'allTraining'])->name('all-training');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/login-registration',[HomeController::class,'auth'])->name('login-registration');


Route::get('/teacher/login',[TeacherAuthController::class,'index'])->name('teacher.login');
Route::post('/teacher/login',[TeacherAuthController::class,'login'])->name('teacher.login');

Route::middleware(['teacher.auth'])->group(function () {

    Route::get('/teacher/dashboard',[TeacherAuthController::class,'dashboard'])->name('teacher.dashboard');
    Route::post('/teacher/logout',[TeacherAuthController::class,'logout'])->name('teacher.logout');


    Route::get('/training/add', [TrainingController::class,'index'])->name('training.add');
    Route::post('/training/create', [TrainingController::class,'create'])->name('training.create');
    Route::get('/training/manage', [TrainingController::class,'manage'])->name('training.manage');
    Route::get('/training/edit/{id}', [TrainingController::class,'edit'])->name('training.edit');
    Route::get('/training/detail/{id}', [TrainingController::class,'detail'])->name('training.detail');
    Route::post('/training/update/{id}', [TrainingController::class,'update'])->name('training.update');
    Route::post('/training/delete/{id}', [TrainingController::class,'delete'])->name('training.delete');


});






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/teacher/add', [TeacherController::class,'index'])->name('teacher.add');
    Route::post('/teacher/create', [TeacherController::class,'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
    Route::post('/teacher/delete/{id}', [TeacherController::class,'delete'])->name('teacher.delete');



    Route::get('/category/add', [CategoryController::class,'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class,'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');

    Route::get('/admin/manage-training', [AdminTrainingController::class,'index'])->name('admin.manage-training');
    Route::get('/admin/update-training-status/{id}', [AdminTrainingController::class,'updateStatus'])->name('admin.update-training-status');
    Route::get('/admin/training-detail/{id}', [AdminTrainingController::class,'detail'])->name('admin.training-detail');

});
