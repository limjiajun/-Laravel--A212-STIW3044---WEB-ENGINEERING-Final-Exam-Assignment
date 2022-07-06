<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//landing page include login and reegister
Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');

//post
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//mainpage
Route::get('mainpage', [SubjectController::class, 'mainpage']);
Route::post('/savesubject', [SubjectController::class,'saveSubject'])->name('savesubject');
Route::get('mainpage', [SubjectController::class, 'mainpage'])->name('mainpage');
Route::post('/markDeleteRoute/{id}', [SubjectController::class, 'markDelete'])->name('markDelete');
Route::post('/markUpdateRoute/{id}', [SubjectController::class, 'markUpdate'])->name('markUpdate');