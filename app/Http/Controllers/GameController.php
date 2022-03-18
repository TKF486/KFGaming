<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

use Illuminate\Http\Request;

class GameController extends Controller
{
    // public function PassFromDB(){
    //     return DB::select('select * from games');
    //   }

    // function testData()
    // {
    //     return DB::select('select * from games');
    // }

    public function list()
    {
        return Game::all();
        // echo 'testing';
    }

    public function testOneGame($id)
    {
       $data = Game::where('id', $id)->get();
       return view('gameDetails',['games'=>$data]);
       
    }

      
}
