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
        $orders = Order::where('user_id', Auth::user()->id )->get();
        return view('records.index', compact('orders'));
    }
}
