<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use Illuminate\Bus\Batch;

Route::get('/', function () {
    return view('homepage/home');
})->name('home');

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('login_post',[AuthController::class,'login_post']);

Route::group(['middleware' => 'admin'], function() {

    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);


    Route::get('admin/Subject', [SubjectController::class,'index']);
    Route::post('/admin/subject/store',[SubjectController::class,'store']);
    Route::delete('/admin/subject/delete/{id}',[SubjectController::class,'destroy']);



    Route::get('admin/teacher', [TeacherController::class,'index']);

    Route::get('admin/batch', [BatchController::class,'index']);

});

Route::group(['middleware' => 'user'], function() {

    Route::get('user/dashboard',[DashboardController::class,'dashboard']);

});

Route::get('logout', [AuthController::class, 'logout']); //tftu
