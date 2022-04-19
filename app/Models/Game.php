<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ["gameName", "gamePrice", "gameDesc", "gamePublisher","gameAgeRating","gameGenre","gameReleaseDate","gameLanguage","gameRequirement","mainImage","image1","image2"];

    public function users()
    {
        return $this->belongstoMany(User::class);
    }

    public function orders()
    {
        return $this->belongstoMany(Order::class);
    }
   
}



 
