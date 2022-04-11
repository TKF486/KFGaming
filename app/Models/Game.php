<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ["gameName", "gamePrice", "gameDesc", "gamePublisher","gameAgeRating","gameGenre","gameReleaseDate","gameLanguage","gameRequirement","mainImage","image1","image2"];

    public function users()
    {
        return $this->belongstoMany(User::class);
    }
   
}



 
