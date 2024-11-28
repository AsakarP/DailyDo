<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\dashboard;
use App\Http\Controllers\sidebar\timesheets;
use App\Http\Controllers\sidebar\todo;
use App\Http\Controllers\sidebar\report;
use App\Http\Controllers\sidebar\settings;
use App\Http\Controllers\pages\AccountSettingsAccount;

// Main Page Route
// Dashboard
Route::get('/', [dashboard::class, 'index'])->name('app-dashboard');

// Timesheets
Route::get('/sidebar/timesheets', [timesheets::class, 'index'])->name('app-timesheets');

// To do
Route::get('/sidebar/todo', [todo::class, 'index'])->name('app-todo');

// Report
Route::get('/sidebar/report', [report::class, 'index'])->name('app-report');

// Settings
Route::get('/sidebar/settings', [settings::class, 'index'])->name('app-settings');
Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('app-settings');
// Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings-account');
// Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings-account');
