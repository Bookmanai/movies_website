<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::redirect('/', '/layouts');
Route::resource('/layouts', App\Http\Controllers\MainPageController::class);

Route::get('/pricing', [MainPageController::class, 'pricing'])->name('pricing');
Route::get('/faq', [MainPageController::class, 'faq'])->name('faq');

Route::resource('/usersfront', FrontController::class);


Route::resource('/movies', App\Http\Controllers\MovieController::class);
Route::model('movie', 'App\Models\Movie');
Route::resource('movie', 'App\Http\Controllers\MovieController');

Route::get('/movies/tag/{tag}', [MovieController::class, 'movie_by_tag'])->name('movies.tag');
Route::get('/movies/prod/{producer}', [MovieController::class, 'movie_by_prod'])->name('movies.prod');


Route::resource('/shows', App\Http\Controllers\ShowController::class);
Route::model('show', 'App\Models\Show');
Route::resource('show', 'App\Http\Controllers\ShowController');

Route::get('/shows/tag/{tag}', [ShowController::class, 'show_by_tag'])->name('shows.tag');
Route::get('/shows/prod/{producer}', [ShowController::class, 'show_by_prod'])->name('shows.prod');


Route::resource('/actors', App\Http\Controllers\ActorController::class);
Route::model('actor', 'App\Models\Actor');
Route::resource('actor', 'App\Http\Controllers\ActorController');


Route::resource('/producers', App\Http\Controllers\ProducerController::class);
Route::model('producer', 'App\Models\Producer');
Route::resource('producer', 'App\Http\Controllers\ProducerController');


Route::resource('/tags', App\Http\Controllers\TagController::class);
Route::model('tag', 'App\Models\Tag');
Route::resource('tag', 'App\Http\Controllers\TagController');


Route::resource('/genres', App\Http\Controllers\GenreController::class);
Route::model('genre', 'App\Models\Genre');
Route::resource('genre', 'App\Http\Controllers\GenreController');


Route::resource('/users', App\Http\Controllers\UserController::class);
Route::model('user', 'App\Models\User');
Route::resource('user', 'App\Http\Controllers\UserController');


Auth::routes();

Route::get('/movie_admin', function (){ return view('tags.index'); })->middleware('auth', 'auth.admin');
Route::get('/show_admin', function (){ return view('shows.index'); })->middleware('auth', 'auth.admin');
Route::get('/actor_admin', function (){ return view('actors.index'); })->middleware('auth', 'auth.admin');
Route::get('/producer_admin', function (){ return view('producers.index'); })->middleware('auth', 'auth.admin');
Route::get('/user_admin', function (){ return view('users.index'); })->middleware('auth', 'auth.admin');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/login', App\Http\Controllers\Auth\LoginController::class);
Route::get('/login', [LoginController::class, 'loginForm'])->name('loginform');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/register', App\Http\Controllers\Auth\RegisterController::class);
Route::get('/register', [RegisterController::class, 'registerForm'])->name('registerform');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
