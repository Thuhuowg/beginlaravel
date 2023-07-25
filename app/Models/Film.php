<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public function actors() {
        return $this->belongsToMany(Actor::class, "actor_films", "film_id", "actor_id");
    }
}
