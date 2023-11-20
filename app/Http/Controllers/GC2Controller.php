<?php

namespace App\Http\Controllers;

use App\Models\GC2;
use Illuminate\Http\Request;

class GC2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'gc_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        GC2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $gc=GC2::latest()->get();
        return view('store.gc2',compact('gc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,GC2 $gc)
    {
        $request->validate([
            'name'=>'required',
            'gc_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $gc->update($request->all());
        return redirect()->route('gc2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GC2 $gc){
        return view('store.gcUpdate2',compact('gc'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GC2 $gc)
    {
        $gc->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
