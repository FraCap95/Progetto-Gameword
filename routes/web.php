<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, "welcome"])->name('welcome');

Route::get('article.create', [GameController::class, "create"])->name ('article_create');

Route::post('/article/store', [GameController::class, 'store'])->name('article_store');

Route::get('/article/index', [GameController::class, 'index'])->name('article_index');

Route::get('/article/show/{game}', [GameController::class, 'show'])->name('article_show');

Route::get('/user-page', [PublicController::class, "userPage"])->name('user-page');

Route::get('article/edit/{game}', [GameController::class,'edit'])->name('article_edit');

Route::post('article/update/{game}', [GameController::class, 'update'])->name('article_update');

Route::delete('article/destroy/{game}', [GameController::class, 'destroy'])->name('article_destroy');

Route::get('/user-show', [PublicController::class, 'userShow'])->name('user-show');

Route::get('/console/{console}', [PublicController::class, 'console_filter'])->name('console_filter');