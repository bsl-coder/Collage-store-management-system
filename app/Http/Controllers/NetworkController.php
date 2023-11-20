<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'network_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        Network::create($request->all());
        return redirect()->back()->with('success','Data save Successfully');
    }

    public function show()
    {
        $network=Network::latest()->get();
        return view('store.network',compact('network'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Network $network)
    {
        $request->validate([
            'name'=>'required',
            'network_id'=>'required',
            'options'=>'required',
            'model'=>'required',
            'details'=>'required',
        ]);
        $network->update($request->all());
        return redirect()->route('network')->with('success','Data updated Successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Network $network){
        return view('store.networkUpdate',compact('network'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Network $network)
    {
        $network->delete();
        return redirect()->back()->with('success','Data delete Successfully');
    }
}
