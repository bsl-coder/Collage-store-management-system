<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use Illuminate\Http\Request;

class CasingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'casing_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Casing::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $casing=Casing::latest()->get();
        return view('store.casing',compact('casing'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Casing $casing)
    {
        $request->validate([
            'name'=>'required',
            'casing_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $casing->update($request->all());
        return redirect()->route('casing')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Casing $casing){
        return view('store.casingUpdate',compact('casing'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casing $casing)
    {
        $casing->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
    
}
