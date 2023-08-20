<?php
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentMethodController;
use App\Models\Loan;
use App\Models\Member;
use App\Models\User;
use App\Models\PaymentMethod;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loan',[LoanController::class,'index']);
Route::get('/add-loan',[LoanController::class,'create']);
Route::post('/loan/store',[LoanController::class,'store']);
Route::get('/loan/{id}', [LoanController::class,'edit']);
Route::patch('/loan/update/{id}', [LoanController::class,'update']);
Route::get('/loan/delete/{id}', [LoanController::class,'destroy']);

Route::get('/member',[MemberController::class,'index']);
Route::get('/add-member',[MemberController::class,'create']);
Route::post('/member/store',[MemberController::class,'store']);
Route::get('/member/{id}', [MemberController::class,'edit']);
Route::patch('/member/update/{id}', [MemberController::class,'update']);
Route::get('/member/delete/{id}', [MemberController::class,'destroy']);


Route::get('/payment-method',[PaymentMethodController::class,'index']);
Route::get('/add-payment-method',[PaymentMethodController::class,'create']);
Route::post('/payment-method/store',[PaymentMethodController::class,'store']);
Route::get('/payment-method/{id}', [PaymentMethodController::class,'edit']);
Route::patch('/payment-method/update/{id}', [PaymentMethodController::class,'update']);
Route::get('/payment-method/delete/{id}', [PaymentMethodController::class,'destroy']);


Route::get('/user',[UserController::class,'index']);
Route::get('/add-user',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);
Route::get('/user/{id}', [UserController::class,'edit']);
Route::patch('/user/update/{id}', [UserController::class,'update']);
Route::get('/user/delete/{id}', [UserController::class,'destroy']);

