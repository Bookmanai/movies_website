<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'description', 'release_date', 'runtime',
                            'rating', 'poster', 'tag_id', 'producer_id', 'user_id' ];

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function producer(){
        return $this->belongsTo(Producer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'genre_movie');
    }

    public function hasAnyGenre($genre)
    {
        return null !== $this->genres()->where('name', $genre)->first();
    }

    public function actors(){
        return $this->belongsToMany(Actor::class, 'actor_movie');
    }

    public function hasAnyActor($actor)
    {
        return null !== $this->actors()->where('lastname', $actor)->first();
    }
}
