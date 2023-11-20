<?php

namespace App\Http\Controllers;

use App\Models\Hardware;

use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'hardware_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Hardware::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $hardware=Hardware::latest()->get();
        return view('store.hardware',compact('hardware'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Hardware $hardware)
    {
        $request->validate([
            'name'=>'required',
            // 'motherboard_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $hardware->update($request->all());
        return redirect()->route('hardware')->with('success','Data updated Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Hardware $hardware){
        return view('store.hardwareUpdate',compact('hardware'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hardware $hardware)
    {
        $hardware->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
