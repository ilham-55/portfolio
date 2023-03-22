<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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




Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('hero/create', [HeroController::class, 'create'])->name('hero.create');
Route::post('hero/store', [HeroController::class, 'store'])->name('hero.store');
Route::get('/', [FrontendController::class, 'index'])->name('admin.dashboard');

Route::get('aboutme/create', [AboutMeController::class, 'create'])->name('aboutme.create');
Route::post('aboutme/store', [AboutMeController::class, 'store'])->name('aboutme.store');

Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::post('contact/store', [PortfolioController::class, 'sendmail'])->name('send.mail');
Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




