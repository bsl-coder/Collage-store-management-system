<?php

namespace App\Http\Controllers;

use App\Models\GC;
use Illuminate\Http\Request;

class GCController extends Controller
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
        GC::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $gc=GC::latest()->get();
        return view('store.gc',compact('gc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,GC $gc)
    {
        $request->validate([
            'name'=>'required',
            'gc_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $gc->update($request->all());
        return redirect()->route('gc')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GC $gc){
        return view('store.gcUpdate',compact('gc'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GC $gc)
    {
        $gc->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
