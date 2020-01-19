<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Product;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function dashboard()
    {   
        dd('this is dashbaord of emp');
    }

    public function order()
    {
        $clients = Client::all();
        $products = Product::all();
        return view('orders.index', compact('clients', 'products'));
    }

    public function submitOrder(Request $request)
    {
        $data = [
            'client_id' => $request->input('client'),
            'product_id' => $request->input('product'),
            'user_id' => Auth::user()->_id,
            'paid_amount' => $request->input('paid'),
            'total_bill' => $request->input('bill'),
            'quantity' => $request->input('qty'),
        ];
        $order = Order::create($data);
        if(!isset($order->client->balance)){
            $order->client->balance = 0;
        }
        $order->client->balance = $order->client->balance + ($order->total_bill - $order->paid_amount);
        dd($order);
    }
}
