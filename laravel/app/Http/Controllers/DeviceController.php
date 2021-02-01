<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Device;

class DeviceController extends Controller
{
    public function index(){

        $devices = Device::all();
        return view('pages.devices', compact('devices'));

    }

    public function show($id){

        $device = Device::findOrFail($id);
        return view('pages.device', compact('device'));
    }

    public function create(){
        return view('pages.device-create');
    }

    public function store(Request $request){

        // dd($request ->all());

        $newDevice = new Device;

        $newDevice -> name = $request -> input('name');
        $newDevice -> type = $request -> input('type');
        $newDevice -> price = $request -> input('price');
        $newDevice -> consumption = $request -> input('consumption');

        $newDevice -> save();

        return redirect() ->route('device-index');


    }
}
