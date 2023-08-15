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
Route::get('/calculate-loan/{loanId}', [LoanController::class, 'calculateLoanData']);

Route::get('/member',[MemberController::class,'index']);
Route::get('/add-member',[MemberController::class,'create']);
Route::post('/member/store',[MemberController::class,'store']);
Route::get('/member/{id}', [MemberController::class,'edit']);
Route::patch('/member/update/{id}', [MemberController::class,'update']);
Route::get('/member/delete/{id}', [MemberController::class,'destroy']);


Route::get('/paymentmethod',[PaymentMethodController::class,'index']);
Route::get('/add-paymentmethod',[PaymentMethodController::class,'create']);
Route::post('/paymentmethod/store',[PaymentMethodController::class,'store']);
Route::get('/paymentmethod/{id}', [PaymentMethodController::class,'edit']);
Route::patch('/paymentmethod/update/{id}', [PaymentMethodController::class,'update']);
Route::get('/paymentmethod/delete/{id}', [PaymentMethodController::class,'destroy']);


Route::get('/user',[UserController::class,'index']);
Route::get('/add-user',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);
Route::get('/user/{id}', [UserController::class,'edit']);
Route::patch('/user/update/{id}', [UserController::class,'update']);
Route::get('/user/delete/{id}', [UserController::class,'destroy']);

