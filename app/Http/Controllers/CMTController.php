<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use App\Models\Casing2;
use App\Models\GC;
use App\Models\GC2;
use App\Models\Hardware;
use App\Models\HD;
use App\Models\HD2;
use App\Models\Monitor;
use App\Models\Monitor2;
use App\Models\Motherboard;
use App\Models\Motherboard2;
use App\Models\Network;
use App\Models\OtherCM;
use App\Models\OtherCM2;
use App\Models\Processor;
use App\Models\Processor2;
use App\Models\PS;
use App\Models\PS2;
use App\Models\RAM;
use App\Models\RAM2;
use App\Models\SSD;
use App\Models\SSD2;
use Illuminate\Http\Request;

class CMTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $monitor=Monitor::latest()->get();
        $monitor2=Monitor2::latest()->get();
        $processor=Processor::latest()->get();
        $processor2=Processor2::latest()->get();
        $motherboard=Motherboard::latest()->get();
        $motherboard2=Motherboard2::latest()->get();
        $gc=GC::latest()->get();
        $gc2=GC2::latest()->get();
        $ram=RAM::latest()->get();
        $ram2=RAM2::latest()->get();
        $ps=PS::latest()->get();
        $ps2=PS2::latest()->get();
        $hd=HD::latest()->get();
        $hd2=HD2::latest()->get();
        $ssd=SSD::latest()->get();
        $ssd2=SSD2::latest()->get();
        $casing=Casing::latest()->get();
        $casing2=Casing2::latest()->get();
        $othercm=OtherCM::latest()->get();
        $othercm2=OtherCM2::latest()->get();
        $hardware=Hardware::latest()->get();
        $network=Network::latest()->get();
        return view('store.master',compact('monitor','processor','motherboard','gc','ram','ps','hd','ssd','casing','othercm','monitor2','processor2','motherboard2','gc2','ram2','ps2','hd2','ssd2','casing2','othercm2','hardware','network'));
    }
    
}
