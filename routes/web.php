<?php

use App\Http\Controllers\backend\BackendDashboardController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\EventsController;
use App\Http\Controllers\frontend\GetStartController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\TrainersController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    
    Route::get('/', 'index');
});

Route::controller(AboutController::class)->group(function (){
    Route::get('/frontend/about', 'index');
});

Route::controller(ContactController::class)->group(function (){
    Route::get('/frontend/contact', 'index');
});

Route::controller(CoursesController::class)->group(function(){
    Route::get('/frontend/courses', 'index');
});

Route::controller(TrainersController::class)->group(function(){
    Route::get('/frontend/trainers', 'index');
});

Route::controller(EventsController::class)->group(function(){
    Route::get('/frontend/events', 'index');
});

Route::controller(PricingController::class)->group(function(){
    Route::get('/frontend/pricing', 'index');
});

Route::controller(GetStartController::class)->group(function(){
    Route::get('/frontend/get-start', 'index');
});


/* BACKEND */
Route::controller(BackendDashboardController::class)->group(function(){
    Route::get('/dashboard', 'index');
});

