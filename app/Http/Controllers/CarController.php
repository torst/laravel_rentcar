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


    public function checkdate(Request $Request){
      $car = Car::all();
      $start = $Request->start;
      $end = $Request->end;
      if ($start == '' || $end == '') {
        echo "<script type='text/javascript'>alert('Please input date start to end.');</script>";
        return view('home');
      }
      elseif ($start <= $end) {
        return view('car')->with(['start'=>$Request->start,'end'=>$Request->end, 'car'=>$car]);
      }
      else {
        echo "<script type='text/javascript'>alert('Please input date is correct!.');</script>";
        return view('home');
      }

    }

    public function rent($car_id){
      $car = Car::where('id', $car_id)->first();
      return view('rent')->with(['car'=>$car]);
    }
    public function addname($car_id){
      
    }
}
