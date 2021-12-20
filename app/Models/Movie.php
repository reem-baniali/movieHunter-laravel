<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    protected $fillable = ['movie_title','movie_desc','movie_genre','movie_img']; 
    use HasFactory;
}
