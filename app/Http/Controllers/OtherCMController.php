<?php

namespace App\Http\Controllers;

use App\Models\OtherCM;
use Illuminate\Http\Request;

class OtherCMController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'product_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        OtherCM::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $othercm=OtherCM::latest()->get();
        return view('store.othercm',compact('othercm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,OtherCM $othercm)
    {
        $request->validate([
            'name'=>'required',
            'product_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $othercm->update($request->all());
        return redirect()->route('othercm')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OtherCM $othercm){
        return view('store.othercmUpdate',compact('othercm'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherCM $othercm)
    {
        $othercm->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
