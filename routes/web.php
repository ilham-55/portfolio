<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::post('hero/create', [HeroController::class, 'store'])->name('hero.store');
Route::get('/', [FrontendController::class, 'index'])->name('admin.dashboard');
