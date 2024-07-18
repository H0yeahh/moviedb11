<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function getReviewerById($id)
    {
        $reviewer = Reviewer::findOrFail($id);
        return response()->json($reviewer);
    }
}