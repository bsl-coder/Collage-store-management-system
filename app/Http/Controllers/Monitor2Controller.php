<?php

namespace App\Http\Controllers;

use App\Models\Monitor2;
use Illuminate\Http\Request;

class Monitor2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'monitor_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Monitor2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $monitor=Monitor2::latest()->get();
        return view('store.monitor2',compact('monitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Monitor2 $monitor)
    {
        $request->validate([
            'name'=>'required',
            'monitor_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $monitor->update($request->all());
        return redirect()->route('monitor2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Monitor2 $monitor){
        return view('store.monitorUpdate2',compact('monitor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitor2 $monitor)
    {
        $monitor->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
