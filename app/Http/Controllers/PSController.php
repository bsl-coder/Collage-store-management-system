<?php

namespace App\Http\Controllers;

use App\Models\PS;
use Illuminate\Http\Request;

class PSController extends Controller
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
        PS::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ps=PS::latest()->get();
        return view('store.ps',compact('ps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,PS $ps)
    {
        $request->validate([
            'name'=>'required',
            'ps_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $ps->update($request->all());
        return redirect()->route('ps')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PS $ps){
        return view('store.psUpdate',compact('ps'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PS $ps)
    {
        $ps->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
