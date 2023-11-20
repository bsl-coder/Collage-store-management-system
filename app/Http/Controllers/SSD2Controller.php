<?php

namespace App\Http\Controllers;

use App\Models\SSD2;
use Illuminate\Http\Request;

class SSD2Controller extends Controller
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
        SSD2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $ssd=SSD2::latest()->get();
        return view('store.ssd2',compact('ssd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,SSD2 $ssd)
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
        return redirect()->route('ssd2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SSD2 $ssd){
        return view('store.ssdupdate2',compact('ssd'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SSD2 $ssd)
    {
        $ssd->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
