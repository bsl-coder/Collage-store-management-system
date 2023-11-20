<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use Illuminate\Http\Request;

class RAMController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'ram_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'ddr'=>'required',
            'rambus'=>'required',
            'details'=>'required',
        ]);
        RAM::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ram=RAM::latest()->get();
        return view('store.ram',compact('ram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,RAM $ram)
    {
        $request->validate([
            'name'=>'required',
            'ram_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'ddr'=>'required',
            'rambus'=>'required',
            'details'=>'required',
        ]);
        $ram->update($request->all());
        return redirect()->route('ram')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RAM $ram){
        return view('store.ramUpdate',compact('ram'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RAM $ram)
    {
        $ram->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
