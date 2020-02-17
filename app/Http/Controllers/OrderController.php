<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Product;
use App\Order;
use Auth;
use App\discountVoucher;


class OrderController extends Controller
{
    public function dashboard()
    {   
        dd('this is dashbaord of emp');
    }

    public function order()
    {
        $discountVoucher = discountVoucher::all();
        $clients = Client::all();
        $products = Product::all();
        return view('orders.index', compact('clients', 'products', 'discountVoucher'));
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
            'discount_id' => $request->input('discount'),
        ];
        $order = Order::create($data);
        $client = Client::find($order->client_id);
        if(!isset($client->balance)){
            $client->balance = 0;
        }
        $client->balance = $client->balance + ($order->total_bill - $order->paid_amount);
        $client->save();
        return redirect()->back();
    }
}
