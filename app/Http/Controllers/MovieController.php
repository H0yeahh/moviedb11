<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getAllMovies()
    {
        $movies = Movie::with(['director', 'actors', 'genres', 'ratings.reviewer'])->get();
        return response()->json($movies);
    }

    public function getMovieById($id)
    {
        $movie = Movie::with(['director', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
        return response()->json($movie);
    }

    public function getDirectorById($id)
    {
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }

    public function getActorById($id)
    {
        $actor = Actor::with('movies')->findOrFail($id);
        return response()->json($actor);
    }

    public function getMoviesWithGenres()
    {
        $movies = Movie::with('genres')->get();
        return response()->json($movies);
    }

    public function getMoviesWithRatings()
    {
        $movies = Movie::with('ratings.reviewer')->get();
        return response()->json($movies);
    }
}