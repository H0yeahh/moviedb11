<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    Route::get('/movies', [MovieController::class, 'getAllMovies']);
    Route::get('/movies/{id}', [MovieController::class, 'getMovieById']);
    Route::get('/movies/genres', [MovieController::class, 'getMoviesWithGenres']);
    Route::get('/movies/ratings', [MovieController::class, 'getMoviesWithRatings']);
    
    Route::get('/directors/{id}', [DirectorController::class, 'getDirectorById']);
    Route::get('/actors/{id}', [ActorController::class, 'getActorById']);
});