<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class, 'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/doctor', [HomeController::class, 'doctor']);


Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

