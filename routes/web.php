<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowPageController;

//Route::get('/', function () {return view('welcome'); });

//----------Show Pages Routes------------------------------------

Route::get('/home',[ShowPageController::class,'home'])->name('home');
Route::get('/about',[ShowPageController::class,'about'])->name('about');
Route::get('/appointment',[ShowPageController::class,'appointment'])->name('appointment');
Route::get('/cta',[ShowPageController::class,'cta'])->name('cta');
Route::get('/classes',[ShowPageController::class,'classes'])->name('classes');
Route::get('/contact',[ShowPageController::class,'contact'])->name('contact');
Route::get('/facility',[ShowPageController::class,'facility'])->name('facility');
Route::get('/team',[ShowPageController::class,'team'])->name('team');
Route::get('/404',[ShowPageController::class,'errorpage'])->name('errorpage');
Route::get('/testimonial',[ShowPageController::class,'testimonial'])->name('testimonial');


//-----------------------------------------------------------------------