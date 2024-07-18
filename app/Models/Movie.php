<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;

class Movie extends Model
{
    protected $primaryKey = 'mov_id';
    public $incrementing = false;
    public $timestamps = false;

    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id', 'dir_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actor', 'movie_id', 'actor_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'movie_id', 'mov_id');
    }
}