<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesTurn extends Model
{
    use HasFactory;

    protected $fillable = ["movie_id", "turn_id"];
}
