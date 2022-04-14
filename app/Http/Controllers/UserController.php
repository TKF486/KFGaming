<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Game;

class UserController extends Controller
{

    public function updateUser(Request $req) {
        $data = User::find($req->id); // model out user with this id, with the request
        $data->username = $req->name;   // find the name and email within the request
        $data->email = $req->email;
        $data->save();
        return redirect("userInnerView2");
    }

    public function showUpdate($id) {
        $data = User::find($id);
        return view ("updateUser", ['data'=>$data]); // return to the view with the updated data
    }

    function deleteUser($id) { // ID to be processed
        $data = User::find($id); // finding the user with the ID
        $data -> delete(); // once found, have the data deleted
        return redirect("userInnerView2");
    }

    function addUser(Request $req) {
        $user = new User;                   // Create a new model
        $user->username = $req->name;   // Map the column name to the input of the new request
        $user->email = $req->email;
        $user->id = $req->id;
        $user->save();                      // Save the new user input
        return redirect("userInnerView2");
    }

    function userProfile() {
        $data = User::paginate(5);
        return view('userProfile', ['users'=>$data]);
    }

    function userInnerView() {
        $data = User::all();
        return view('userInnerView', ['users'=>$data]);
    }

    function userLoadView() {
        $data = User::all();
        return view('userLoadView', ['users'=>$data]);
    }

    function userList2() {
        return User::all();
    }

    function userList() {
        return DB::select("select * from users");
    }

    function user_order_relation($id){
        // $user = Order::where('user_id', $id)->lists('game_id');
        $gameList = Order::select('game_id')->where('user_id', $id)->get();
        // return $gameList;
        return view('/userGameList', ['games'=>$gameList]);
    }
}
