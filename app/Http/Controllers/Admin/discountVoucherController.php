<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\discountVoucher;
use App\Client;
use App\Product;
use Illuminate\Http\Request;



class discountVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::all();
        $products = Product::all();
        return view('discountVouchers.index', compact('clients', 'products'));
        
    }

    public function create()
    {
        //
        return view('discountVouchers.create');
    }

    public function store(Request $request)
    {
        $data = [
            'client_id' => $request->input('client'),
            'product_id' => $request->input('product'),
            'vourcher_name' => $request->input('vourcher'),
            'discount' => $request->input('discount'),
        ];
        $discountVoucher = discountVoucher::create($data);
        //dd($discountVoucher);
        return redirect('admin/discountVoucher');
    }
    
}
