<?php

namespace App\Http\Controllers;


use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
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
        Monitor::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $monitor=Monitor::latest()->get();
        return view('store.monitor',compact('monitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Monitor $monitor)
    {
        $request->validate([
            'name'=>'required',
            'monitor_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $monitor->update($request->all());
        return redirect()->route('monitor')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Monitor $monitor){
        return view('store.monitorUpdate',compact('monitor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitor $monitor)
    {
        $monitor->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
