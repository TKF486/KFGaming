<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //insert into Order_user table
    // public function store(Request $req){
    //     return Order::create($req->all());
    // }

    function orderView($id) {
        $order = Order::find($id);
        // DB::select("select * from orders where user_id = $id");
        return view("orderView", ['order'=>$order]);
    }

    // public function show(Request $req, $id){
    //     $Order = Order::findOrFail($id);
    //     return $Order;
    // }

    // public function update(Request $req, $id){
    //     $Order = Order::findOrFail($id);
    //     $Order->update($req->all());
    //     return $Order;
    // }

    // public function destroy($id){
    //     $Order = Order::findOrFail($id);
    //     $Order->delete();
    //     return 204;
    // }

    public function createOrder(Request $req)
    {
        $order = new Order;
        $order->game_id = $req->game_id;
        $order->user_id = $req->user_id;
        $order->creditCard = $req->creditCard;
        $order->address = $req->address;
        $order->save();
        return redirect('gamelisting');
    }
}
