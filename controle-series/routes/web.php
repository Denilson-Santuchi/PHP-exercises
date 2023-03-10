<?php

use App\Http\Controllers\{
    EpisodesController,
    LoginController,
    SeasonsController,
    SeriesController,
    UsersController,
};
use App\Http\Middleware\Autenticador;
use App\Mail\SeriesCreated;
use Illuminate\Support\Facades\Route;

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

Route::resource('/series', SeriesController::class)
    ->except(['show', 'delete']);
Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])
    ->name('delete');

Route::middleware('autenticador')->group(function () {
    Route::get('/', function () {
        return redirect('/series');
    })->middleware(Autenticador::class);

    Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])
        ->name('seasons.index');

    Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])
        ->name('episodes.index');
    Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])
        ->name('episodes.update');
});

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store'])
    ->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])
    ->name('logout');

Route::get('/register', [UsersController::class, 'create'])
    ->name('users.create');
Route::post('/register', [UsersController::class, 'store'])
    ->name('users.store');

Route::get('/email', function () {
    return new SeriesCreated(
        'Série de test',
        1,
        5,
        10
    );
});
