<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function list()
    {
        $data = Game::all();
        return view('gameDetails',['games'=>$data]);
    }

    public function testOneGame($id)
    {
       $data = Game::where('id', $id)->get();
       return view('gameDetails',['games'=>$data]);
       
    }

    public function store(Request $req)
    {
        $game = new Game;
        if ($req->hasFile('file')) {
            $req->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $req->file->store('game', 'public');
        }
             
        $game->gameName = $req->gameName;
        $game->gamePrice = $req->gamePrice;
        $game->gameDesc = $req->gameDesc;
        $game->gamePublisher = $req->gamePublisher;
        $game->gameAgeRating = $req->gameAgeRating;
        $game->gameGenre = $req->gameGenre;
        $game->gameReleaseDate = $req->gameReleaseDate;
        $game->gameLanguage = $req->gameLanguage;
        $game->gameRequirement = $req->gameRequirement;
        $game->file_path = $req->file->hashName();
        $game->save();
        return redirect('createGames');
      
    }



}
      
