<?php

namespace App\Http\Controllers;

use App\Models\RAM2;
use Illuminate\Http\Request;

class RAM2Controller extends Controller
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
        RAM2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ram=RAM2::latest()->get();
        return view('store.ram2',compact('ram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,RAM2 $ram)
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
        return redirect()->route('ram2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RAM2 $ram){
        return view('store.ramUpdate2',compact('ram'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RAM2 $ram)
    {
        $ram->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
