<?php

namespace App\Http\Controllers;

use App\Models\SSD;
use Illuminate\Http\Request;

class SSDController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'ssd_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'storage'=>'required',
            'details'=>'required',
        ]);
        SSD::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ssd=SSD::latest()->get();
        return view('store.ssd',compact('ssd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,SSD $ssd)
    {
        $request->validate([
            'name'=>'required',
            'ssd_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'storage'=>'required',
            'details'=>'required',
        ]);
        $ssd->update($request->all());
        return redirect()->route('ssd')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SSD $ssd){
        return view('store.ssdupdate',compact('ssd'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SSD $ssd)
    {
        $ssd->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
