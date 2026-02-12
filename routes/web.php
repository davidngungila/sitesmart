<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home route - redirect to dashboard if authenticated
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Projects Routes
    Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/', function () { return view('projects.index'); })->name('index');
    Route::get('/create', function () { return view('projects.create'); })->name('create');
    Route::get('/phases', function () { return view('projects.phases'); })->name('phases');
    Route::get('/milestones', function () { return view('projects.milestones'); })->name('milestones');
    Route::get('/timeline', function () { return view('projects.timeline'); })->name('timeline');
    Route::get('/documents', function () { return view('projects.documents'); })->name('documents');
});

    // Tasks Routes
    Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::get('/', function () { return view('tasks.index'); })->name('index');
    Route::get('/calendar', function () { return view('tasks.calendar'); })->name('calendar');
    Route::get('/wbs', function () { return view('tasks.wbs'); })->name('wbs');
    Route::get('/delayed', function () { return view('tasks.delayed'); })->name('delayed');
});

    // Finance Routes
    Route::prefix('finance')->name('finance.')->group(function () {
    Route::get('/budgets', function () { return view('finance.budgets'); })->name('budgets');
    Route::get('/expenses', function () { return view('finance.expenses'); })->name('expenses');
    Route::get('/payments', function () { return view('finance.payments'); })->name('payments');
    Route::get('/invoices', function () { return view('finance.invoices'); })->name('invoices');
    Route::get('/reports', function () { return view('finance.reports'); })->name('reports');
});

    // Materials Routes
    Route::prefix('materials')->name('materials.')->group(function () {
    Route::get('/', function () { return view('materials.index'); })->name('index');
    Route::get('/stock', function () { return view('materials.stock'); })->name('stock');
    Route::get('/orders', function () { return view('materials.orders'); })->name('orders');
    Route::get('/suppliers', function () { return view('materials.suppliers'); })->name('suppliers');
    Route::get('/alerts', function () { return view('materials.alerts'); })->name('alerts');
});

    // Workforce Routes
    Route::prefix('workforce')->name('workforce.')->group(function () {
    Route::get('/workers', function () { return view('workforce.workers'); })->name('workers');
    Route::get('/contractors', function () { return view('workforce.contractors'); })->name('contractors');
    Route::get('/attendance', function () { return view('workforce.attendance'); })->name('attendance');
    Route::get('/payroll', function () { return view('workforce.payroll'); })->name('payroll');
});

    // Reports Routes
    Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/daily', function () { return view('reports.daily'); })->name('daily');
    Route::get('/progress', function () { return view('reports.progress'); })->name('progress');
    Route::get('/risk', function () { return view('reports.risk'); })->name('risk');
    Route::get('/analytics', function () { return view('reports.analytics'); })->name('analytics');
});

    // Documents Routes
    Route::prefix('documents')->name('documents.')->group(function () {
    Route::get('/', function () { return view('documents.index'); })->name('index');
});

    // Communication Routes
    Route::prefix('communication')->name('communication.')->group(function () {
    Route::get('/', function () { return view('communication.index'); })->name('index');
});

    // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/users', function () { return view('admin.users'); })->name('users');
        Route::get('/roles', function () { return view('admin.roles'); })->name('roles');
        Route::get('/settings', function () { return view('admin.settings'); })->name('settings');
        Route::get('/audit', function () { return view('admin.audit'); })->name('audit');
    });
});
