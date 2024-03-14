<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TimelineController;


use App\Models\Post;
use App\Models\Page;
use App\Models\Timeline;





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
/*
Route::view('/', 'index');
*/
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

/*HomeController*/
Route::get('/', [HomeController::class, 'index']);
//Route::get('/', [HomeController::class, 'sliderPost'])->name('posts.sliderPost');

/*PostController*/
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', [PostController::class, 'archive']);

/*PageController*/
Route::get('/{slug}', [PageController::class, 'single']);

/*TimelineController*/
Route::get('/timeline/{slug}', [TimelineController::class, 'single'])->name('timeline.single');

require __DIR__.'/auth.php';
