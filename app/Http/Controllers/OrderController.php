<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //insert into Order_user table
    public function store(Request $req){
        return Order::create($req->all());
    }

    public function index(){
        return Order::all();
    }

    public function show(Request $req, $id){
        $Order = Order::findOrFail($id);
        return $Order;
    }

    public function update(Request $req, $id){
        $Order = Order::findOrFail($id);
        $Order->update($req->all());
        return $Order;
    }

    public function destroy($id){
        $Order = Order::findOrFail($id);
        $Order->delete();
        return 204;
    }
}
