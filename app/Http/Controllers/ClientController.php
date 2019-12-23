<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientValidate = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'clientPh' => 'required',
            'rate' => 'required',
            'qty' => 'required',
            'product'=> 'required'
            ]);
        $client = new Client;
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->clientPh = $request->input('clientPh');
        $client->rate = $request->input('rate');
        $client->qty = $request->input('qty');
        //todo: remove product from there
        $client->product = $request->input('product');
        $client->save();
        return redirect('client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->clientPh = $request->input('clientPh');
        $client->rate = $request->input('rate');
        $client->qty = $request->input('qty');
        $client->product = $request->input('product');
        $client->save();
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('client');

    }
}
