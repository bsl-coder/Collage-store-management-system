<?php

namespace App\Http\Controllers;

use App\Models\PS2;
use Illuminate\Http\Request;

class PS2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'ps_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        PS2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ps=PS2::latest()->get();
        return view('store.ps2',compact('ps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,PS2 $ps)
    {
        $request->validate([
            'name'=>'required',
            'ps_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $ps->update($request->all());
        return redirect()->route('ps2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PS2 $ps){
        return view('store.psUpdate2',compact('ps'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PS2 $ps)
    {
        $ps->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
