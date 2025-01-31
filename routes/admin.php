<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookCategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookIssueController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\StudentUserCcontroller;

Route::get('dashboard',[DashboardController::class,'index'])->name('index');

Route::resource('book-categories', BookCategoryController::class);
Route::get('book-categories/{bookCategory}/update-status', [BookCategoryController::class, 'updateStatus'])->name('book-Categories.updateStatus');
Route::resource('books', BookController::class);
Route::resource('book-issues', BookIssueController::class);
Route::resource('student-register',StudentUserCcontroller::class);
Route::get('student-register/{user}/update-status', [StudentUserCcontroller::class, 'updateStatus'])->name('student-register.updateStatus');
Route::resource('semester',SemesterController::class);
Route::get('semester/{semester}/update-status', [SemesterController::class, 'updateStatus'])->name('semester.updateStatus');
Route::resource('slider',SliderController::class);
Route::get('slider/{slider}/update-status', [SliderController::class, 'updateStatus'])->name('slider.updateStatus');

