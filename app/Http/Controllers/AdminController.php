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
}
