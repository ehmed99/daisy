<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\discountVoucher;
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
        $discountVourchers = discountVoucher::all();
        return view('discountVouchers.index', compact('discountVourchers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('discountVouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $discountVourchersValidate = request()->validate([
            'vourcher_name' => 'required',
            'product_name' => 'required',
            'discount' => 'required'
            ]);
        $discountVourcher = new discountVoucher;
        $discountVourcher->vourcher_name = $request->input('vourcher_name');
        $discountVourcher->product_name = $request->input('product_name');
        $discountVourcher->discount = $request->input('discount');
        //todo: remove product from there (DONE)
        $discountVourcher->save();
        return redirect('admin/discountVoucher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\discountVoucher  $discountVoucher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $discountVourcher = discountVoucher::find($id);
        return view('discountVouchers.show', compact('discountVourcher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\discountVoucher  $discountVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $discountVourcher = discountVoucher::find($id);
        return view('discountVouchers.edit', compact('discountVourcher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\discountVoucher  $discountVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $discountVourcher = discountVoucher::find($id);
        $discountVourcher->vourcher_name = $request->input('vourcher_name');
        $discountVourcher->product_name = $request->input('product_name');
        $discountVourcher->discount = $request->input('discount');
        //todo: remove product from there (DONE)
        $discountVourcher->save();
        return view('discountVouchers.index', compact('discountVourcher'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\discountVoucher  $discountVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $discountVourcher = discountVoucher::find($id);
        $discountVourcher->delete();
        return redirect('discountVoucher');
    }
}
