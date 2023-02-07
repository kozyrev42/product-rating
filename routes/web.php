<?php

use Illuminate\Support\Facades\Route;
// мои контроллеры
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateReviewController;
use App\Http\Controllers\EditReviewController;
use App\Http\Controllers\CreateFakesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/createreview', [CreateReviewController::class, 'show']);

Route::get('/editreview', [EditReviewController::class, 'show']);

Route::get('/createfakes', [CreateFakesController::class, 'show']);

Route::get('/registration', [RegistrationController::class, 'show']);

Route::get('/login', [LoginController::class, 'show']);
