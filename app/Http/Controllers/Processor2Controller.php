<?php

namespace App\Http\Controllers;

use App\Models\Processor2;
use Illuminate\Http\Request;

class Processor2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'processor_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'generation'=>'required',
            'details'=>'required',
        ]);
        Processor2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $processor=Processor2::latest()->get();
        return view('store.processor2',compact('processor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Processor2 $processor)
    {
        $request->validate([
            'name'=>'required',
            'processor_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'generation'=>'required',
            'details'=>'required',
        ]);
        $processor->update($request->all());
        return redirect()->route('processor2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Processor2 $processor){
        return view('store.processorUpdate2',compact('processor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Processor2 $processor)
    {
        $processor->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
