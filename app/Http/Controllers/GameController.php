<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use Validator;
use Illuminate\Http\Request;

class GameController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'gameName' => 'required|string|max:30|unique:games',
            'gamePrice' => 'required|numeric',
            'gameDesc' => 'required|string|max:255',
            'gamePublisher' => 'required|string|max:30',
            'gameAgeRating' => 'required|int',
            'gameGenre' => 'required|string|max:30',
            'gameReleaseDate' => 'required|date',
            'gameLanguage' => 'required|string|max:30',
            'gameRequirement' => 'required|string|max:255',
        ]);
    }

    public function create(Request $req)
    {
        $this->validator($req->all())->validate();

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
        $game->mainImage = $req->file->hashName();
        $game->image1 = $req->image1;
        $game->image2 = $req->image2;
        $game->save();
        return redirect('createGames');
      
    }

    public function index(){
        return Game::all();
    }

    public function show(Request $req, $id){
        $game = Game::findOrFail($id);
        return $game;
    }

    public function store(Request $req){
        return Game::create($req->all());
    }

    public function update(Request $req, $id){
        $game = Game::findOrFail($id);
        $game->update($req->all());
        return $game;
    }

    public function destroy($id){
        $game = Game::findOrFail($id);
        $game->delete();
        return 204;
    }

}
      
