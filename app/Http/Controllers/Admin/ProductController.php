<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
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
        $productValidate = request()->validate([
            'product' => 'required',
            'size' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required'
            ]);
        $product = new Product;
        $product->product = $request->input('product');
        $product->size = $request->input('size');
        $product->img = $request->file('img');
        $new_name = 'product.'.$product->img->getClientOriginalExtension();
        $product->img->move($new_name,'img');
        $product->price = $request->input('price');
        //todo:: add price of each products(DONE)
        $product->save();
        return redirect('admin/product')->withSuccess('Data is enter Success Fully')->with('path',$new_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $product = Product::find($id);
        $product->product = $request->input('product');
        $product->size = $request->input('size');
        $product->img = $request->input('img');
        $product->price = $request->input('price');
        $product->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }
}
