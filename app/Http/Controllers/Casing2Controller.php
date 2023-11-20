<?php

namespace App\Http\Controllers;

use App\Models\Casing2;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\Caster;

class Casing2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'casing_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Casing2::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $casing=Casing2::latest()->get();
        return view('store.casing2',compact('casing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Casing2 $casing)
    {
        $request->validate([
            'name'=>'required',
            'casing_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $casing->update($request->all());
        return redirect()->route('casing2')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Casing2 $casing){
        return view('store.casingUpdate2',compact('casing'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casing2 $casing)
    {
        $casing->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
