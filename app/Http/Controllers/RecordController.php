<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Record;
use App\Client;
use App\Product;
use App\Order;
use Auth;

class RecordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $clients = Client::all();
        // $products = Product::all();
        // $orders = Order::all();
        // $data =[
        //     'name'=>$request->input('client->name'),
        //     'address'=> $request->input('client->address'),
        //     'order'=>$request->input('product')
        // ];
        // return view('records.index', compact('clients', 'products','orders'));
        return view('records.index');
    }
}
