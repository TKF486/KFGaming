<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameUserUser;

class CheckoutController extends Controller
{
    //insert into GameUser_user table
    public function store(Request $req){
        return GameUserUser::create($req->all());
    }

    public function index(){
        return GameUser::all();
    }

    public function show(Request $req, $id){
        $GameUser = GameUser::findOrFail($id);
        return $GameUser;
    }

    public function update(Request $req, $id){
        $GameUser = GameUser::findOrFail($id);
        $GameUser->update($req->all());
        return $GameUser;
    }

    public function destroy($id){
        $GameUser = GameUser::findOrFail($id);
        $GameUser->delete();
        return 204;
    }
}
