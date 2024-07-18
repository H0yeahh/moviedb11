<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;

class Reviewer extends Model
{
    protected $primaryKey = 'rev_id'; 
    public $incrementing = false;
    public $timestamps = false;

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'reviewer_id', 'rev_id');
    }
}