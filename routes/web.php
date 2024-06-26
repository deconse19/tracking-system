<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EmailVerification;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\User\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/email/verify/{id}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');

Route::get('/task/{task_id}/approval/{user_id}/accept', [TaskController::class, 'acceptTask'])->name('accept.task');
Route::get('/task/{task_id}/approval/{user_id}/decline', [TaskController::class, 'declineTask'])->name('decline.task');


Route::view('/sucess', 'success')->name('sucess');
