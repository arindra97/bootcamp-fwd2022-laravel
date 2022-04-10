<?php

use Illuminate\Support\Facades\Route;

// frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;

// backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\ConsultationController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\DoctorController;
use App\Http\Controllers\Backsite\AppointmentBackofficeController;
use App\Http\Controllers\Backsite\TransactionController;
use App\Http\Controllers\Backsite\ReportController;

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

Route::resource('/', LandingController::class);


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // appointment page
    Route::resource('appointment', AppointmentController::class);
    
    // payment page
    Route::resource('payment', PaymentController::class);
});

Route::group(['prefix'=>'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    
    // dashboard
    Route::resource('dashboard', DashboardController::class);
    
    // permission
    Route::resource('permission', PermissionController::class);
    
    // role
    Route::resource('role', RoleController::class);
    
    // type-user
    Route::resource('type-user', TypeUserController::class);
    
    // user
    Route::resource('user', UserController::class);
    
    // consultation
    Route::resource('consultation', ConsultationController::class);
    
    // specialist
    Route::resource('specialist', SpecialistController::class);
    
    // config-payment
    Route::resource('config-payment', ConfigPaymentController::class);
    
    // doctor
    Route::resource('doctor', DoctorController::class);
    
    // appointment-backoffice
    Route::resource('appointment-backoffice', AppointmentBackofficeController::class);
    
    // transaction
    Route::resource('transaction', TransactionController::class);
    
    // report
    Route::resource('report', ReportController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
