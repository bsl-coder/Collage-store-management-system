<?php

use App\Http\Controllers\Casing2Controller;
use App\Http\Controllers\CasingController;
use App\Http\Controllers\CMTController;
use App\Http\Controllers\GC2Controller;
use App\Http\Controllers\GCController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\HD2Controller;
use App\Http\Controllers\HDController;
use App\Http\Controllers\Monitor2Controller;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\Motherboard2Controller;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\OtherCM2Controller;
use App\Http\Controllers\OtherCMController;
use App\Http\Controllers\Processor2Controller;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\PS2Controller;
use App\Http\Controllers\PSController;
use App\Http\Controllers\RAM2Controller;
use App\Http\Controllers\RAMController;
use App\Http\Controllers\SSD2Controller;
use App\Http\Controllers\SSDController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('/')->group(function () {
    Route::controller(CMTController::class)->group(function(){
        Route::get('/','show')->name('home');
        Route::post('/add','create')->name('product.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{product}','update')->name('product.update');
        Route::put('/update/{product}','edit')->name('product.edit');
        Route::delete('/delete/{product}','destroy')->name('product.delete');
    });
});

// Lab 1 Monitor page Routing
Route::prefix('/Lab_1_monitor')->group(function () {
    Route::controller(MonitorController::class)->group(function(){
        Route::get('/','show')->name('monitor');
        Route::post('/add','create')->name('monitor.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{monitor}','update')->name('monitor.update');
        Route::put('/update/{monitor}','edit')->name('monitor.edit');
        Route::delete('/delete/{monitor}','destroy')->name('monitor.delete');
    });
});
//Lab 2 Monitor page Routing
Route::prefix('/Lab_2_monitor')->group(function () {
    Route::controller(Monitor2Controller::class)->group(function(){
        Route::get('/','show')->name('monitor2');
        Route::post('/add','create')->name('monitor2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{monitor}','update')->name('monitor2.update');
        Route::put('/update/{monitor}','edit')->name('monitor2.edit');
        Route::delete('/delete/{monitor}','destroy')->name('monitor2.delete');
    });
});
//Lab 1 processor page Routing
Route::prefix('/Lab_1_processor')->group(function () {
    Route::controller(ProcessorController::class)->group(function(){
        Route::get('/','show')->name('processor');
        Route::post('/add','create')->name('processor.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{processor}','update')->name('processor.update');
        Route::put('/update/{processor}','edit')->name('processor.edit');
        Route::delete('/delete/{processor}','destroy')->name('processor.delete');
    });
});
//Lab 2 processor page Routing
Route::prefix('/Lab_2_processor')->group(function () {
    Route::controller(Processor2Controller::class)->group(function(){
        Route::get('/','show')->name('processor2');
        Route::post('/add','create')->name('processor2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{processor}','update')->name('processor2.update');
        Route::put('/update/{processor}','edit')->name('processor2.edit');
        Route::delete('/delete/{processor}','destroy')->name('processor2.delete');
    });
});
//Lab 1 motherboard page Routing
Route::prefix('/Lab_1_motherboard')->group(function () {
    Route::controller(MotherboardController::class)->group(function(){
        Route::get('/','show')->name('motherboard');
        Route::post('/add','create')->name('motherboard.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{motherboard}','update')->name('motherboard.update');
        Route::put('/update/{motherboard}','edit')->name('motherboard.edit');
        Route::delete('/delete/{motherboard}','destroy')->name('motherboard.delete');
    });
});
//Lab 2 motherboard page Routing
Route::prefix('/Lab_2_motherboard')->group(function () {
    Route::controller(Motherboard2Controller::class)->group(function(){
        Route::get('/','show')->name('motherboard2');
        Route::post('/add','create')->name('motherboard2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{motherboard}','update')->name('motherboard2.update');
        Route::put('/update/{motherboard}','edit')->name('motherboard2.edit');
        Route::delete('/delete/{motherboard}','destroy')->name('motherboard2.delete');
    });
});
//lab 1 Graphics Card page Routing
Route::prefix('/Lab_1_Graphics_Card')->group(function () {
    Route::controller(GCController::class)->group(function(){
        Route::get('/','show')->name('gc');
        Route::post('/add','create')->name('gc.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{gc}','update')->name('gc.update');
        Route::put('/update/{gc}','edit')->name('gc.edit');
        Route::delete('/delete/{gc}','destroy')->name('gc.delete');
    });
});
//Lab 2 Graphics Card page Routing
Route::prefix('/Lab_2_Graphics_Card')->group(function () {
    Route::controller(GC2Controller::class)->group(function(){
        Route::get('/','show')->name('gc2');
        Route::post('/add','create')->name('gc2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{gc}','update')->name('gc2.update');
        Route::put('/update/{gc}','edit')->name('gc2.edit');
        Route::delete('/delete/{gc}','destroy')->name('gc2.delete');
    });
});
//Lab 1 RAM page Routing
Route::prefix('/Lab_1_RAM')->group(function () {
    Route::controller(RAMController::class)->group(function(){
        Route::get('/','show')->name('ram');
        Route::post('/add','create')->name('ram.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ram}','update')->name('ram.update');
        Route::put('/update/{ram}','edit')->name('ram.edit');
        Route::delete('/delete/{ram}','destroy')->name('ram.delete');
    });
});
//Lab 2 RAM page Routing
Route::prefix('/Lab_2_RAM')->group(function () {
    Route::controller(RAM2Controller::class)->group(function(){
        Route::get('/','show')->name('ram2');
        Route::post('/add','create')->name('ram2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ram}','update')->name('ram2.update');
        Route::put('/update/{ram}','edit')->name('ram2.edit');
        Route::delete('/delete/{ram}','destroy')->name('ram2.delete');
    });
});
//Lab 1 Power Supply page Routing
Route::prefix('/Lab_1_Power_Supply')->group(function () {
    Route::controller(PSController::class)->group(function(){
        Route::get('/','show')->name('ps');
        Route::post('/add','create')->name('ps.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ps}','update')->name('ps.update');
        Route::put('/update/{ps}','edit')->name('ps.edit');
        Route::delete('/delete/{ps}','destroy')->name('ps.delete');
    });
});
//Lab 2 Power Supply page Routing
Route::prefix('/Lab_2_Power_Supply')->group(function () {
    Route::controller(PS2Controller::class)->group(function(){
        Route::get('/','show')->name('ps2');
        Route::post('/add','create')->name('ps2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ps}','update')->name('ps2.update');
        Route::put('/update/{ps}','edit')->name('ps2.edit');
        Route::delete('/delete/{ps}','destroy')->name('ps2.delete');
    });
});
//Lab 1 Hard Disk page Routing
Route::prefix('/Lab_1_Hard_Disk')->group(function () {
    Route::controller(HDController::class)->group(function(){
        Route::get('/','show')->name('hd');
        Route::post('/add','create')->name('hd.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{hd}','update')->name('hd.update');
        Route::put('/update/{hd}','edit')->name('hd.edit');
        Route::delete('/delete/{hd}','destroy')->name('hd.delete');
    });
});
//Lab 2 Hard Disk page Routing
Route::prefix('/Lab_2_Hard_Disk')->group(function () {
    Route::controller(HD2Controller::class)->group(function(){
        Route::get('/','show')->name('hd2');
        Route::post('/add','create')->name('hd2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{hd}','update')->name('hd2.update');
        Route::put('/update/{hd}','edit')->name('hd2.edit');
        Route::delete('/delete/{hd}','destroy')->name('hd2.delete');
    });
});
//Lab 1 SSD page Routing
Route::prefix('/Lab_1_SSD')->group(function () {
    Route::controller(SSDController::class)->group(function(){
        Route::get('/','show')->name('ssd');
        Route::post('/add','create')->name('ssd.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ssd}','update')->name('ssd.update');
        Route::put('/update/{ssd}','edit')->name('ssd.edit');
        Route::delete('/delete/{ssd}','destroy')->name('ssd.delete');
    });
});
//Lab 2 SSD page Routing
Route::prefix('/Lab_2_SSD')->group(function () {
    Route::controller(SSD2Controller::class)->group(function(){
        Route::get('/','show')->name('ssd2');
        Route::post('/add','create')->name('ssd2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{ssd}','update')->name('ssd2.update');
        Route::put('/update/{ssd}','edit')->name('ssd2.edit');
        Route::delete('/delete/{ssd}','destroy')->name('ssd2.delete');
    });
});
//Lab 1 Casing page Routing
Route::prefix('/Lab_1_Casing')->group(function () {
    Route::controller(CasingController::class)->group(function(){
        Route::get('/','show')->name('casing');
        Route::post('/add','create')->name('casing.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{casing}','update')->name('casing.update');
        Route::put('/update/{casing}','edit')->name('casing.edit');
        Route::delete('/delete/{casing}','destroy')->name('casing.delete');
    });
});
//Lab 2 Casing page Routing
Route::prefix('/Lab_2_Casing')->group(function () {
    Route::controller(Casing2Controller::class)->group(function(){
        Route::get('/','show')->name('casing2');
        Route::post('/add','create')->name('casing2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{casing}','update')->name('casing2.update');
        Route::put('/update/{casing}','edit')->name('casing2.edit');
        Route::delete('/delete/{casing}','destroy')->name('casing2.delete');
    });
});
//Lab 1 Other Componemt page Routing
Route::prefix('/Lab_1_Other_Component')->group(function () {
    Route::controller(OtherCMController::class)->group(function(){
        Route::get('/','show')->name('othercm');
        Route::post('/add','create')->name('othercm.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{othercm}','update')->name('othercm.update');
        Route::put('/update/{othercm}','edit')->name('othercm.edit');
        Route::delete('/delete/{othercm}','destroy')->name('othercm.delete');
    });
});
//Lab 2 Other Componemt page Routing
Route::prefix('/Lab_2_Other_Component')->group(function () {
    Route::controller(OtherCM2Controller::class)->group(function(){
        Route::get('/','show')->name('othercm2');
        Route::post('/add','create')->name('othercm2.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{othercm}','update')->name('othercm2.update');
        Route::put('/update/{othercm}','edit')->name('othercm2.edit');
        Route::delete('/delete/{othercm}','destroy')->name('othercm2.delete');
    });
});
//Hardware Lab  page Routing
Route::prefix('/Hardware_Lab')->group(function () {
    Route::controller(HardwareController::class)->group(function(){
        Route::get('/','show')->name('hardware');
        Route::post('/add','create')->name('hardware.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{hardware}','update')->name('hardware.update');
        Route::put('/update/{hardware}','edit')->name('hardware.edit');
        Route::delete('/delete/{hardware}','destroy')->name('hardware.delete');
    });
});
//Network Lab  page Routing
Route::prefix('/Network_Lab')->group(function () {
    Route::controller(NetworkController::class)->group(function(){
        Route::get('/','show')->name('network');
        Route::post('/add','create')->name('network.store');
        Route::post('/','show')->name('submit');

        Route::get('/edit/{network}','update')->name('network.update');
        Route::put('/update/{network}','edit')->name('network.edit');
        Route::delete('/delete/{network}','destroy')->name('network.delete');
    });
});
Auth::routes();
