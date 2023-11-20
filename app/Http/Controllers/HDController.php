<?php

namespace App\Http\Controllers;

use App\Models\HD;
use Illuminate\Http\Request;

class HDController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'hd_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'storage'=>'required',
            'details'=>'required',
        ]);
        HD::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $hd=HD::latest()->get();
        return view('store.hd',compact('hd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,HD $hd)
    {
        $request->validate([
            'name'=>'required',
            'hd_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'storage'=>'required',
            'details'=>'required',
        ]);
        $hd->update($request->all());
        return redirect()->route('hd')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HD $hd){
        return view('store.hdupdate',compact('hd'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HD $hd)
    {
        $hd->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
