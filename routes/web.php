<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/articles', [ArticleController::class, 'index']) // '/articles' bouwt ENKEL de URL op.
    ->name('articles'); // route name, op te nemen in bv je nav include.

// bv articles/4
Route::get('/articles/{id}', [ArticleController::class, 'show'])
    ->name('article.show');
