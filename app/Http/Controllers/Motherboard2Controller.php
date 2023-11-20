<?php

namespace App\Http\Controllers;

use App\Models\Motherboard2;
use Illuminate\Http\Request;

class Motherboard2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'motherboard_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Motherboard2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $motherboard=Motherboard2::latest()->get();
        return view('store.motherboard2',compact('motherboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Motherboard2 $motherboard)
    {
        $request->validate([
            'name'=>'required',
            'motherboard_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $motherboard->update($request->all());
        return redirect()->route('motherboard2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Motherboard2 $motherboard){
        return view('store.motherboardUpdate2',compact('motherboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motherboard2 $motherboard)
    {
        $motherboard->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
