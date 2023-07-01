<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MadingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', HomeController::class);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'getRegisterPage']);
});

Route::middleware(['guest'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'index');
            Route::get('/register', 'getRegisterPage');
        });


    });
});

Route::middleware('auth')->group(function () {

    Route::resource('/product', ProductController::class);

    Route::prefix('mading')->group(function () {
        Route::controller(MadingController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'show');
            Route::post('/create', 'store');
        });
    });
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});



Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::prefix('/dashboard')->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'show');
            Route::get('/detail/{mading:title}', 'detail');
        });
    });
});
