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
}
