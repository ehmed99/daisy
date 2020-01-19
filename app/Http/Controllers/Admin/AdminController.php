<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('home');
    }
    public function orders(){
        $orders  = Order::all();
        return view('allOrders', compact('orders'));
    }
}
