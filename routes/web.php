<?php

use Illuminate\Support\Facades\Route;
// мои контроллеры
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateReviewController;
use App\Http\Controllers\EditReviewController;
use App\Http\Controllers\CreateFakesController;


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

Route::get('/', [HomeController::class, 'index']);

Route::post('/', [HomeController::class, 'formHandler']);

Route::get('/createreviewshow/{id}', [CreateReviewController::class, 'show']);
Route::post('/create_review', [CreateReviewController::class, 'createReview']);

Route::get('/editreview', [EditReviewController::class, 'show']);

Route::get('/createfakes', [CreateFakesController::class, 'show']);
Route::get('/factory', [CreateFakesController::class, 'factory']);

Route::get('/registration', [RegistrationController::class, 'show']);

Route::get('/login', [LoginController::class, 'show']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {return redirect('/');});
