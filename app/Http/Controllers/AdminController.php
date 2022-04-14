<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Game;

class AdminController extends Controller
{
    public function gameDetails(){
        // return DB::select('select * from users');
        $data = Game::paginate(5);;
        return view('adminGame',['games'=>$data]);
      }

      public function deleteGame($id)
      {
          $data = Game::find($id);
          $data-> delete();
          return redirect("adminGame");
      }
      
      public function showUpdate($id)
      {
        $data = Game::find($id);
        return view("updateGame", ['data'=>$data]);
      }

      public function updateGame(Request $req)
      {
        if ($req->hasFile('file')) {
            $req->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $req->file->store('game', 'public');
        }
          $data = Game::find($req->id);
          $data->gameName = $req->gameName;
          $data->gamePrice = $req->gamePrice;
          $data->gameDesc = $req->gameDesc;
          $data->gamePublisher = $req->gamePublisher;
          $data->gameAgeRating = $req->gameAgeRating;
          $data->gameGenre = $req->gameGenre;
          $data->gameReleaseDate = $req->gameReleaseDate;
          $data->gameLanguage = $req->gameLanguage;
          $data->gameRequirement = $req->gameRequirement;
          $data->mainImage = $req->file->hashName();
          $data->image1 = $req->image1;
          $data->image2 = $req->image2;
          $data->save();
          return redirect('adminGame');
      }
}
