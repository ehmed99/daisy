<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Employ;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employs = User::where('user_type', '!=', 'admin')->get();
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
        $employValidate = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'joining' => 'required',
            'salary' => 'required',
            'designation' => 'required',
            'incentives' => 'required'
            ]);
        //todo:: use this user model for empolye
        $employ = new User;
        $employ->name = $request->input('name');
        $employ->address = $request->input('address');
        $employ->phone = $request->input('phone');
        $employ->joining = $request->input('joining');
        $employ->salary = $request->input('salary');
        $employ->designation = $request->input('designation');
        $employ->incentives = $request->input('incentives');
        //todo: get password and email from the form
        $employ->email = "test@test.com";
        $employ->password = Hash::make($request->input('phone'));

        $employ->save();
        return redirect('/admin/employ')->withSuccess('Data is enter Success Fully');
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
        $employ = User::find($id);
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
        $employ = User::find($id);
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
        $employ = User::find($id);
        $employ->name = $request->input('name');
        $employ->address = $request->input('address');
        $employ->phone = $request->input('phone');
        $employ->joining = $request->input('joining');
        $employ->salary = $request->input('salary');
        $employ->designation = $request->input('designation');
        $employ->incentives = $request->input('incentives');
        $employ->save();
        return redirect('admin/employ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        //todo: dont use hard delete, always use soft delete, laravel has builtin functionality of soft delete, see the official docs 
        $user->delete();
        return redirect()->route('employ.index');
    }
}
