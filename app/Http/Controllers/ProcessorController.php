<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
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
        Processor::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $processor=Processor::latest()->get();
        return view('store.processor',compact('processor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Processor $processor)
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
        return redirect()->route('processor')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Processor $processor){
        return view('store.processorUpdate',compact('processor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Processor $processor)
    {
        $processor->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
