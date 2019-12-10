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
        //
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
        $employValidate = request()->validate([
            'emplyName' => 'required',
            'employAddress' => 'required',
            'employPh' => 'required',
            'employJoining' => 'required',
            'employSalary' => 'required',
            'employDesignation' => 'required',
            'employIncentives' => 'required'
            ]);
        $employ = new Employ;
        $employ->emplyName = $request->input('emplyName');
        $employ->employAddress = $request->input('employAddress');
        $employ->employPh = $request->input('employPh');
        $employ->employJoining = $request->input('employJoining');
        $employ->employSalary = $request->input('employSalary');
        $employ->employDesignation = $request->input('employDesignation');
        $employ->employIncentives = $request->input('employIncentives');
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
        $employ->emplyName = $request->input('emplyName');
        $employ->employAddress = $request->input('employAddress');
        $employ->employPh = $request->input('employPh');
        $employ->employJoining = $request->input('employJoining');
        $employ->employSalary = $request->input('employSalary');
        $employ->employDesignation = $request->input('employDesignation');
        $employ->employIncentives = $request->input('employIncentives');
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
        //
        $employ = Employ::find($id);
        $employ->delete();
        return redirect('employ');
    }
}
