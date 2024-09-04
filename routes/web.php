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
Route::get('/concept-design', [CharacterDesignController::class, 'index']);
Route::get('/concept-design/cruise-ship', [CharacterDesignController::class, 'getCruiseShip']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/cookie-policy', [PageController::class, 'getCookiePolicy']);
Route::get('/privacy-statement', [PageController::class, 'getPrivacyPolicy']);
