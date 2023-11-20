<?php

namespace App\Http\Controllers;

use App\Models\OtherCM2;
use Illuminate\Http\Request;

class OtherCM2Controller extends Controller
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
        OtherCM2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $othercm=OtherCM2::latest()->get();
        return view('store.othercm2',compact('othercm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,OtherCM2 $othercm)
    {
        $request->validate([
            'name'=>'required',
            'product_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $othercm->update($request->all());
        return redirect()->route('othercm2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OtherCM2 $othercm){
        return view('store.othercmUpdate2',compact('othercm'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherCM2 $othercm)
    {
        $othercm->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
