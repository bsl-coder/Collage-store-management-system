<?php

namespace App\Http\Controllers;

use App\Models\HD2;
use Illuminate\Http\Request;

class HD2Controller extends Controller
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
        HD2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $hd=HD2::latest()->get();
        return view('store.hd2',compact('hd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,HD2 $hd)
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
        return redirect()->route('hd2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HD2 $hd){
        return view('store.hdupdate2',compact('hd'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HD2 $hd)
    {
        $hd->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
