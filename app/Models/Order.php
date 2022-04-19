<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Game;

class Order extends Model
{
    protected $fillable = ["game_id", "user_id","creditCard","address"];
    use HasFactory;

    public function games()
    {
        return $this->hasOne(Game::class);
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }
}

