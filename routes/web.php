<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Restaurant\DashboardController;
use App\Http\Controllers\FrontController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/post', function () {
    return Inertia::render('front_view/index');
});

Route::get('/restaurant/dashboard',[DashboardController::class,'index'])->name('restaurant.dashboard');

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('', function () {
    return view('welcome');
});

Route::get('our_menu/',[FrontController::class,'menu']);
Route::get('our_culture/',[FrontController::class,'culture']);
Route::get('about_us/',[FrontController::class,'about']);
Route::get('contact_us/',[FrontController::class,'contact']);

require __DIR__.'/auth.php';
