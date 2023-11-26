<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;


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

Route::get('/', [UserAuthController::class, 'index'])->name('login');
Route::get('/view_user_register', [UserAuthController::class, 'view_user_register']);
Route::get('/view_admin_register', [AdminAuthController::class, 'view_admin_register']);
Route::post('/user/register', [UserAuthController::class, 'register']);
Route::post('/user/login', [UserAuthController::class, 'login']);

Route::get('/view_upload_prescription', function () {
    return view('user.uploadPrescription');
});