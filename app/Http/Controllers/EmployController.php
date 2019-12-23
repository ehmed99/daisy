<?php

namespace App\Http\Controllers;

use App\Employ;
use Illuminate\Http\Request;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo: orderBy created_at
        $employs = Employ::all();
        return view('employs.index', compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employs.create');
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
        //todo: rename the vaiables names here, it shouldnt be employeName, it should only be name, address etc etc (DONE)
        //todo: in database columes, dont use camel case for colume name, its okay to use in you code but not in database (DONE)
        $employValidate = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'joining' => 'required',
            'salary' => 'required',
            'designation' => 'required',
            'incentives' => 'required'
            ]);
        $employ = new Employ;
        $employ->name = $request->input('name');
        $employ->address = $request->input('address');
        $employ->phone = $request->input('phone');
        $employ->joining = $request->input('joining');
        $employ->salary = $request->input('salary');
        $employ->designation = $request->input('designation');
        $employ->incentives = $request->input('incentives');
        $employ->save();
        return redirect('employ')->withSuccess('Data is enter Success Fully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function show(Employ $employ)
    {
        //
        $employ = Employ::find($id);
        return view('employ.show', compact('employ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employ = Employ::find($id);
        return view('employs.edit', compact('employ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employ = Employ::find($id);
        $employ->name = $request->input('name');
        $employ->address = $request->input('address');
        $employ->phone = $request->input('phone');
        $employ->joining = $request->input('joining');
        $employ->salary = $request->input('salary');
        $employ->designation = $request->input('designation');
        $employ->incentives = $request->input('incentives');
        $employ->save();
        return redirect('employ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //todo: dont use hard delete, always use soft delete, laravel has builtin functionality of soft delete, see the official docs 
        $employ = Employ::find($id);
        $employ->delete();
        return redirect('employ');
    }
}
