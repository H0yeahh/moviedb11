<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function getDirectorById($id)
    {
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }
}