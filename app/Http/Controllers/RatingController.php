<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function getAllRatings()
    {
        $ratings = Rating::with('user')->get();
        return response()->json($ratings);
    }
}