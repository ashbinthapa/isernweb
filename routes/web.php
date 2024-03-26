<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ContactController;


use App\Models\Post;
use App\Models\Page;
use App\Models\Timeline;
use App\Models\Research;
use App\Models\Publication;
use App\Models\PublicationCategory;


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


/*TimelineController*/
Route::get('/timeline/{slug}', [TimelineController::class, 'single'])->name('timeline.single');

/*ResearchController*/
Route::get('/projects', [ResearchController::class, 'archive']);
Route::get('/projects/{research_status}/{slug}', [ResearchController::class, 'single'])->name('research.single'); /*This single should be load fisrt*/
Route::get('/projects/{research_status}', [ResearchController::class, 'status'])->name('research.status'); /*This should be load after*/

/*PublicationController*/
Route::get('/publications', [PublicationController::class, 'archive']);

/*ContactController*/
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitContactForm']);

/*PageController
NOTE: LOAD THIS ROUTING AT LAST SO THAT IT DOESN'T CHANGES OTHER SINGLE NAME ROUTING
*/
Route::get('/{slug}', [PageController::class, 'single']);
Route::get('/{parent_slug}/{child_slug}', [PageController::class, 'singleChild']);




require __DIR__.'/auth.php';
