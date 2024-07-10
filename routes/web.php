<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IllustrationController;
use App\Http\Controllers\CharacterDesignController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/illustrations', [IllustrationController::class, 'index']);
Route::get('/illustrations/{url}', [IllustrationController::class, 'show']);
Route::get('/character-designs', [CharacterDesignController::class, 'index']);
Route::get('/character-designs/{url}', [CharacterDesignController::class, 'show']);
Route::get('/about-us', [PageController::class, 'getAboutUs']);
Route::get('/contact', [ContactController::class, 'index']);
