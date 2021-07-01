<?php

use App\Http\Controllers\Boards\BoardController;
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

Route::get('/', function () {
  return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});

// Dashboard
Route::get('/dashboard', function () {
  return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Boards
Route::get('/boards/{id}/detail', [BoardController::class, 'detail'])->middleware(['auth', 'verified'])->name('boards.detail');
Route::resource('boards', BoardController::class)->only([
  'create'
])->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
