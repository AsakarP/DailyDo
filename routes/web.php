<?php

// File: web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentications\LoginBasic;
use App\Http\Controllers\dashboard\Dashboard;
use App\Http\Controllers\TimesheetsController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AccountSettingsAccountController;
use App\Http\Controllers\RegisterBasicController;

// Routes for authentication
Route::get('/login', [LoginBasic::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginBasic::class, 'login']);
Route::post('/logout', [LoginBasic::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/', [Dashboard::class, 'index'])->name('app-dashboard');

    // Timesheets
    Route::get('/sidebar/timesheets', [TimesheetsController::class, 'index'])->name('app-timesheets');

    // To do
    Route::get('/sidebar/todo', [TodoController::class, 'index'])->name('app-todo');

    // Report
    Route::get('/sidebar/report', [ReportController::class, 'index'])->name('app-report');

    // Settings
    Route::get('/sidebar/settings', [SettingsController::class, 'index'])->name('app-settings');
    Route::get('/pages/account-settings-account', [AccountSettingsAccountController::class, 'index'])->name('account-settings-account');

    // Authentication
    Route::get('/auth/register-basic', [RegisterBasicController::class, 'index'])->name('auth-register-basic');
    
    Route::post('/tasks/{task}/start-timer', [TaskController::class, 'startTimer'])->name('task.start-timer');
    Route::post('/tasks/{task}/stop-timer', [TaskController::class, 'stopTimer'])->name('task.stop-timer');
});

// End of web.php
