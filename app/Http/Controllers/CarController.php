<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function list()
    {
        $cars = Car::orderBy('team_score')->get();

        return view("cars")->with("cars", $cars);
    }

    public function store(Request $request) {
        $car = new Car;
        $car->team_name = $request->team_name;
        $car->team_score = $request->team_score;
        $car->save();
        return redirect('cars')->with('status', 'Blog Post Form Data Has Been inserted');
    }

}
