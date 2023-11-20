<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'motherboard_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Motherboard::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $motherboard=Motherboard::latest()->get();
        return view('store.motherboard',compact('motherboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Motherboard $motherboard)
    {
        $request->validate([
            'name'=>'required',
            'motherboard_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $motherboard->update($request->all());
        return redirect()->route('motherboard')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Motherboard $motherboard){
        return view('store.motherboardUpdate',compact('motherboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motherboard $motherboard)
    {
        $motherboard->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
