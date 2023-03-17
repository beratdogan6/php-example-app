<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //
    public function list() {
        $drivers = Driver::orderBy('driver_score')->get();

        return view("drivers")->with("drivers", $drivers);
    }
    public function store(Request $request) {
        $driver = new Driver;
        $driver->driver_name = $request->driver_name;
        $driver->driver_team = $request->driver_team;
        $driver->driver_score = $request->driver_score;
        $driver->save();
        return redirect('drivers')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
