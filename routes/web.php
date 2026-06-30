<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/plans', [PlanController::class, 'index'])->name('plans');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'sendContact'])->name('contact.send');

// Who we are
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/mission', [PageController::class, 'mission'])->name('mission');
Route::get('/values', [PageController::class, 'values'])->name('values');
Route::get('/investors', [PageController::class, 'investors'])->name('investors');

// What we offer
Route::get('/gold', [PageController::class, 'gold'])->name('gold');
Route::get('/cryptocurrency', [PageController::class, 'cryptocurrency'])->name('cryptocurrency');
Route::get('/stocks', [PageController::class, 'stocks'])->name('stocks');
Route::get('/cfds', [PageController::class, 'cfds'])->name('cfds');
Route::get('/oil-gas', [PageController::class, 'oilGas'])->name('oil-gas');
Route::get('/forex', [PageController::class, 'forex'])->name('forex');

// Info pages
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/rules', [PageController::class, 'rules'])->name('rules');
Route::get('/imprint', [PageController::class, 'imprint'])->name('imprint');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/loan', [PageController::class, 'loan'])->name('loan');
Route::get('/real-estate', [PageController::class, 'realEstate'])->name('real-estate');
Route::get('/real-estate/apply', [PageController::class, 'realEstateApply'])->name('real-estate.apply');
Route::post('/real-estate/apply', [PageController::class, 'realEstateApplyStore'])->name('real-estate.apply');
Route::get('/password/reset', [PageController::class, 'passwordReset'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'sendPasswordReset'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showNewPassword'])->name('password.reset.token');
Route::post('/password/update', [AuthController::class, 'resetPassword'])->name('password.update');

// Guest-only routes
Route::middleware('guest.only')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth.user', 'admin.only'])->group(function () {
    Route::get('/',                                   [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users',                              [AdminController::class, 'users'])->name('users');
    Route::get('/users/{user}/edit',                  [AdminController::class, 'userEdit'])->name('users.edit');
    Route::post('/users/{user}/update',               [AdminController::class, 'userUpdate'])->name('users.update');
    Route::get('/transactions',                       [AdminController::class, 'transactions'])->name('transactions');
    Route::post('/transactions/{transaction}/approve',[AdminController::class, 'approveTransaction'])->name('transactions.approve');
    Route::post('/transactions/{transaction}/reject', [AdminController::class, 'rejectTransaction'])->name('transactions.reject');
    Route::get('/transactions/{transaction}/proof',   [AdminController::class, 'viewProof'])->name('transactions.proof');
    Route::get('/investments',                        [AdminController::class, 'investments'])->name('investments');
    Route::post('/investments/{investment}/complete',  [AdminController::class, 'completeInvestment'])->name('investments.complete');
});

// Authenticated routes
Route::middleware('auth.user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/deposit', [DashboardController::class, 'deposit'])->name('dashboard.deposit');
    Route::get('/dashboard/deposit/{transaction}/instructions', [DashboardController::class, 'depositInstructions'])->name('dashboard.deposit.instructions');
    Route::post('/dashboard/deposit/{transaction}/proof', [DashboardController::class, 'uploadProof'])->name('dashboard.deposit.proof');
    Route::post('/dashboard/withdraw', [DashboardController::class, 'withdraw'])->name('dashboard.withdraw');
    Route::post('/dashboard/invest', [DashboardController::class, 'invest'])->name('dashboard.invest');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
