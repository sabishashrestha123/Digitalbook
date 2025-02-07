<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookBorrowController;
use App\Http\Controllers\Admin\BookCategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookIssueController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\StudentUserCcontroller;

Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

Route::resource('book-categories', BookCategoryController::class);
Route::get('book-categories/{bookCategory}/update-status', [BookCategoryController::class, 'updateStatus'])->name('book-Categories.updateStatus');
Route::resource('books', BookController::class);
Route::resource('student-register', StudentUserCcontroller::class);
Route::get('student-register/{user}/update-status', [StudentUserCcontroller::class, 'updateStatus'])->name('student-register.updateStatus');
Route::resource('semester', SemesterController::class);
Route::get('semester/{semester}/update-status', [SemesterController::class, 'updateStatus'])->name('semester.updateStatus');
Route::resource('slider', SliderController::class);
Route::get('slider/{slider}/update-status', [SliderController::class, 'updateStatus'])->name('slider.updateStatus');
Route::resource('book-borrow', BookBorrowController::class);
Route::get('book-borrow/{bookBorrow}/update-status', [BookBorrowController::class, 'updateStatus'])->name('book-borrow.updateStatus');
Route::get('/book-borrow/{bookBorrow}/late-fee-form', [BookBorrowController::class, 'showLateFeeForm'])
    ->name('book-borrow.showLateFeeForm');

Route::post('/book-borrow/{bookBorrow}/process-late-fee', [BookBorrowController::class, 'processLateFee'])
    ->name('book-borrow.processLateFee');

    Route::resource('feedback',FeedbackController::class);
    Route::get('feedback/{feedback}/update-status', [FeedbackController::class, 'updateStatus'])->name('feedback.updateStatus');
