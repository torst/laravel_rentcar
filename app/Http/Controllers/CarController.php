<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function information(){
      $car = Car::all();
      return view('information')->with(['car'=>$car]);
    }

    public function details($car_id){
      $car = Car::where('id', $car_id)->first();

      return view('details')->with(['car'=>$car]);
    }
}
