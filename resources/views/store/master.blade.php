@extends('store.index')
@section('main')
<div class="page-wrapper">
    <div class="content">
        <div style="text-align: center;">
            <button id="clab1" class="btn btn-success m-1 p-1">CMT Lab 1 Stores</button>
            <button id="clab2" class="btn btn-info m-1 p-1">CMT Lab 2 Stores</button>
            <button id="hlab" class="btn btn-warning m-1 p-1">Hardware Lab Stores</button>
            <button id="nlab" class="btn btn-primary m-1 p-1">Network Lab Stores</button>
            </div>
         <div class="row" id="img">
            <div class="col-lg-12 col-sm-12 col-12">
                <img style="margin-top: 10px;position: fixed;width:75%;text-align: center;" src="{{asset('assets/img/bpi.jpeg')}}" alt="" srcset="">
            </div>
        </div>
        <div class="row" style="display: none" id="hardlab">
            <h2 class="bg-warning" style="text-align: center;color:aliceblue">HardWare Lab Stores</h2>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                    <div class="dash-widgetimg">
                    <a href="{{route('hardware')}}"><span><img src="{{asset('assets/img/product.png')}}" alt="img"></span></a>
                    </div>
                    <div class="dash-widgetcontent">
                    <a href="{{route('hardware')}}"><h5><span class="counters" data-count="{{$hardware->count()}}">{{$hardware->count()}}</span></h5></a>
                    <a href="{{route('hardware')}}"><h6>Total Hardware</h6></a>
                    </div>
                    </div>
                    </div>
        </div>
        <div class="row" style="display: none" id="netlab">
            <h2 class="bg-primary" style="text-align: center;color:aliceblue">Network Lab Stores</h2>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                    <div class="dash-widgetimg">
                    <a href="{{route('network')}}"><span><img src="{{asset('assets/img/product.png')}}" alt="img"></span></a>
                    </div>
                    <div class="dash-widgetcontent">
                    <a href="{{route('network')}}"><h5><span class="counters" data-count="{{$network->count()}}">{{$network->count()}}</span></h5></a>
                    <a href="{{route('network')}}"><h6>Total Network</h6></a>
                    </div>
                    </div>
                    </div>
        </div>
    <div class="row" style="display: none" id="cmt_lab_stores1">
        <h2 class="bg-success my-3" style="text-align: center;color:aliceblue">CMT Lab Stores 1</h2>
    <div class="col-lg-3 col-sm-6 col-12 ">
        <div class="dash-widget">
        <div class="dash-widgetimg">
        <a href="{{route('monitor')}}"><span><img src="{{asset('assets/img/monitor.png')}}" alt="img"></span></a>
        </div>
        <div class="dash-widgetcontent">
        <a href="{{route('monitor')}}"><h5><span class="counters" data-count="{{$monitor->count()}}">{{$monitor->count()}}</span></h5></a>
        <a href="{{route('monitor')}}"><h6>Total Monitor</h6></a>
        </div>
        </div>
        </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash1">
    <div class="dash-widgetimg">
    <a href="{{route('processor')}}"><span><img src="{{asset('assets/img/cpu.png')}}" alt="img"></span></a>
    </div>
    <div class="dash-widgetcontent">
    <a href="{{route('processor')}}"><h5><span class="counters" data-count="{{$processor->count()}}">{{$processor->count()}}</span></h5></a>
    <a href="{{route('processor')}}"><h6>Total Processor</h6></a>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash2">
    <div class="dash-widgetimg">
    <a href="{{route('motherboard')}}"><span><img src="{{asset('assets/img/motherboard.png')}}" alt="img"></span></a>
    </div>
    <div class="dash-widgetcontent">
    <a href="{{route('motherboard')}}"><h5><span class="counters" data-count="{{$motherboard->count()}}">{{$motherboard->count()}}</span></h5></a>
    <a href="{{route('motherboard')}}"><h6>Total Motherboard</h6></a>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash3">
    <div class="dash-widgetimg">
    <a href="{{route('gc')}}"></a><span><img src="{{asset('assets/img/gpu.png')}}" alt="img"></span>
    </div>
    <div class="dash-widgetcontent">
    <a href="{{route('gc')}}"><h5><span class="counters" data-count="{{$gc->count()}}">{{$gc->count()}}</span></h5></a>
    <a href="{{route('gc')}}"><h6>Total Graphics Card</h6></a>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash3">
    <div class="dash-widgetimg">
    <a href="{{route('ram')}}"><span><img src="{{asset('assets/img/ram.jpg')}}" alt="img"></span></a>
    </div>
    <div class="dash-widgetcontent">
    <a href="{{route('ram')}}"><h5><span class="counters" data-count="{{$ram->count()}}">{{$ram->count()}}</span></h5></a>
    <a href="{{route('ram')}}"><h6>Total RAM</h6></a>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash3">
        <div class="dash-widgetimg">
        <a href="{{route('ps')}}"><span><img src="{{asset('assets/img/ps.png')}}" alt="img"></span></a>
        </div>
        <div class="dash-widgetcontent">
        <a href="{{route('ps')}}"><h5><span class="counters" data-count="{{$ps->count()}}">{{$ps->count()}}</span></h5></a>
        <a href="{{route('ps')}}"><h6>Total Power Supply</h6></a>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash3">
            <div class="dash-widgetimg">
            <a href="{{route('hd')}}"><span><img src="{{asset('assets/img/hs.jpg')}}" alt="img"></span></a>
            </div>
            <div class="dash-widgetcontent">
            <a href="{{route('hd')}}"><h5><span class="counters" data-count="{{$hd->count()}}">{{$hd->count()}}</span></h5></a>
            <a href="{{route('hd')}}"><h6>Total Hard Disk</h6></a>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                <div class="dash-widgetimg">
                <a href="{{route('ssd')}}"><span><img src="{{asset('assets/img/ssd.png')}}" alt="img"></span></a>
                </div>
                <div class="dash-widgetcontent">
                <a href="{{route('ssd')}}"><h5><span class="counters" data-count="{{$ssd->count()}}">{{$ssd->count()}}</span></h5></a>
                <a href="{{route('ssd')}}"><h6>Total SSD</h6></a>
                </div>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                    <a href="{{route('casing')}}"><span><img src="{{asset('assets/img/casing.jpg')}}" alt="img"></span></a>
                    </div>
                    <div class="dash-widgetcontent">
                    <a href="{{route('casing')}}"><h5><span class="counters" data-count="{{$casing->count()}}">{{$casing->count()}}</span></h5></a>
                    <a href="{{route('casing')}}"><h6>Total Casing</h6></a>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                        <a href="{{route('othercm')}}"><span><img src="{{asset('assets/img/tc.png')}}" alt="img"></span></a>
                        </div>
                        <div class="dash-widgetcontent">
                        <a href="{{route('othercm')}}"><h5><span class="counters" data-count="{{$othercm->count()}}">{{$othercm->count()}}</span></h5></a>
                        <a href="{{route('othercm')}}"><h6>Total Other Componemt</h6></a>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="row" style="display: none" id="cmt_lab_stores2">
                            <h2 class="bg-info my-3" style="text-align: center;color:aliceblue">CMT Lab Stores 2</h2>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget">
                            <div class="dash-widgetimg">
                            <a href="{{route('monitor2')}}"><span><img src="{{asset('assets/img/monitor.png')}}" alt="img"></span></a>
                            </div>
                            <div class="dash-widgetcontent">
                            <a href="{{route('monitor2')}}"><h5><span class="counters" data-count="{{$monitor2->count()}}">{{$monitor2->count()}}</span></h5></a>
                            <a href="{{route('monitor2')}}"><h6>Total Monitor</h6></a>
                            </div>
                            </div>
                            </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                        <a href="{{route('processor2')}}"><span><img src="{{asset('assets/img/cpu.png')}}" alt="img"></span></a>
                        </div>
                        <div class="dash-widgetcontent">
                        <a href="{{route('processor')}}"><h5><span class="counters" data-count="{{$processor2->count()}}">{{$processor2->count()}}</span></h5></a>
                        <a href="{{route('processor2')}}"><h6>Total Processor</h6></a>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                        <a href="{{route('motherboard2')}}"><span><img src="{{asset('assets/img/motherboard.png')}}" alt="img"></span></a>
                        </div>
                        <div class="dash-widgetcontent">
                        <a href="{{route('motherboard')}}"><h5><span class="counters" data-count="{{$motherboard2->count()}}">{{$motherboard2->count()}}</span></h5></a>
                        <a href="{{route('motherboard2')}}"><h6>Total Motherboard</h6></a>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                        <a href="{{route('gc2')}}"></a><span><img src="{{asset('assets/img/gpu.png')}}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                        <a href="{{route('gc2')}}"><h5><span class="counters" data-count="{{$gc2->count()}}">{{$gc2->count()}}</span></h5></a>
                        <a href="{{route('gc2')}}"><h6>Total Graphics Card</h6></a>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                        <a href="{{route('ram2')}}"><span><img src="{{asset('assets/img/ram.jpg')}}" alt="img"></span></a>
                        </div>
                        <div class="dash-widgetcontent">
                        <a href="{{route('ram2')}}"><h5><span class="counters" data-count="{{$ram2->count()}}">{{$ram2->count()}}</span></h5></a>
                        <a href="{{route('ram2')}}"><h6>Total RAM</h6></a>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget dash3">
                            <div class="dash-widgetimg">
                            <a href="{{route('ps2')}}"><span><img src="{{asset('assets/img/ps.png')}}" alt="img"></span></a>
                            </div>
                            <div class="dash-widgetcontent">
                            <a href="{{route('ps2')}}"><h5><span class="counters" data-count="{{$ps2->count()}}">{{$ps2->count()}}</span></h5></a>
                            <a href="{{route('ps2')}}"><h6>Total Power Supply</h6></a>
                            </div>
                            </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="dash-widget dash3">
                                <div class="dash-widgetimg">
                                <a href="{{route('hd2')}}"><span><img src="{{asset('assets/img/hs.jpg')}}" alt="img"></span></a>
                                </div>
                                <div class="dash-widgetcontent">
                                <a href="{{route('hd2')}}"><h5><span class="counters" data-count="{{$hd2->count()}}">{{$hd2->count()}}</span></h5></a>
                                <a href="{{route('hd2')}}"><h6>Total Hard Disk</h6></a>
                                </div>
                                </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="dash-widget dash3">
                                    <div class="dash-widgetimg">
                                    <a href="{{route('ssd2')}}"><span><img src="{{asset('assets/img/ssd.png')}}" alt="img"></span></a>
                                    </div>
                                    <div class="dash-widgetcontent">
                                    <a href="{{route('ssd2')}}"><h5><span class="counters" data-count="{{$ssd2->count()}}">{{$ssd2->count()}}</span></h5></a>
                                    <a href="{{route('ssd2')}}"><h6>Total SSD</h6></a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="dash-widget dash3">
                                        <div class="dash-widgetimg">
                                        <a href="{{route('casing2')}}"><span><img src="{{asset('assets/img/casing.jpg')}}" alt="img"></span></a>
                                        </div>
                                        <div class="dash-widgetcontent">
                                        <a href="{{route('casing2')}}"><h5><span class="counters" data-count="{{$casing2->count()}}">{{$casing2->count()}}</span></h5></a>
                                        <a href="{{route('casing2')}}"><h6>Total Casing</h6></a>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="dash-widget dash3">
                                            <div class="dash-widgetimg">
                                            <a href="{{route('othercm2')}}"><span><img src="{{asset('assets/img/tc.png')}}" alt="img"></span></a>
                                            </div>
                                            <div class="dash-widgetcontent">
                                            <a href="{{route('othercm2')}}"><h5><span class="counters" data-count="{{$othercm2->count()}}">{{$othercm->count()}}</span></h5></a>
                                            <a href="{{route('othercm2')}}"><h6>Total Other Componemt</h6></a>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                        @push('jq')
                        <script>
                                $(document).ready(function() {
                                    $('#clab1').click(function(){
                                            $('#img').hide();
                                            $('#cmt_lab_stores1').show();
                                            $('#cmt_lab_stores2').hide();
                                            $('#hardlab').hide();
                                            $('#netlab').hide();

                                        });
                                        $('#clab2').click(function(){
                                            $('#img').hide();
                                            $('#cmt_lab_stores1').hide();
                                            $('#cmt_lab_stores2').show();
                                            $('#hardlab').hide();
                                            $('#netlab').hide();

                                        });
                                        $('#hlab').click(function(){
                                            $('#img').hide();
                                            $('#hardlab').show();
                                            $('#netlab').hide();
                                            $('#cmt_lab_stores1').hide();
                                            $('#cmt_lab_stores2').hide();

                                        });
                                        $('#nlab').click(function(){
                                            $('#img').hide();
                                            $('#hardlab').hide();
                                            $('#netlab').show();
                                            $('#cmt_lab_stores1').hide();
                                            $('#cmt_lab_stores2').hide();

                                        });


                                } );
                           </script>
                    @endpush
@endsection
