<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ["name", "publication_date", "image", "active"];

    public function turns(){
        return $this->belongsTo(Turn::class);
    }


    public function getPubicationDateAttribute()
    {
        return $this->publication_date->format('d-m-Y');
    }


    /*public function getCreatedAtAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }*/

}
