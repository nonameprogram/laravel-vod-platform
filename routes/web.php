<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

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
    return view('welcome');
});

Route::get('/anime/view', function () {
    return view('anime.view');
});

Route::get('/anime/series/view', function () {
    return view('anime.series.view');
});


Route::get('/test', [AnimeController::class, 'index']);

Route::get('/test/{slug}', [AnimeController::class, 'haveSlug']);

Route::post('search', [AnimeController::class, 'search']);
Route::view('/search', 'anime.search');

Route::post('add-anime', [AnimeController::class, 'addAnime']);
Route::view('/add-anime', 'anime.newanime');


