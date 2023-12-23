<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/{rank}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/youtube/{channelId}', [ArticleController::class, 'index2'])->name('article.youtube.index');
