<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    class OrderController extends Controller {

    public function index() {
        return Order::with('items')->get();
    }

    public function store(Request $r) {
        $order = Order::create([
            'user_id'=>auth()->id(),
            'total_price'=>$r->total_price
        ]);

        foreach($r->items as $item){
            OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$item['product_id'],
                'quantity'=>$item['quantity'],
                'price'=>$item['price']
            ]);
        }

        return $order->load('items');
    }

    public function show(Order $order) {
        return $order->load('items');
    }

    public function destroy(Order $order) {
        $order->delete();
        return response()->json(['message'=>'Deleted']);
    }
}

}
