<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;
    protected $fillable = [ 'firstname', 'lastname', 'biography', 'photo' ];

    public function movies(){
        return $this->hasMany(Movie::class);
    }

    public function shows(){
        return $this->hasMany(Show::class);
    }
}
