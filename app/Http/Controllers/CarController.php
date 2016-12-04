<?php

namespace App\Http\Controllers;
use App\Car;
use App\rent;
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
      $rent = rent::all();
      $start = $Request->start;
      $end = $Request->end;
      if ($start == '' || $end == '') {
        echo "<script type='text/javascript'>alert('Please input date start to end.');</script>";
        return view('home');
      }
      elseif ($start <= $end) {
        return view('car')->with(['start'=>$Request->start,'end'=>$Request->end, 'car'=>$car, 'rent'=>$rent]);
      }
      else {
        echo "<script type='text/javascript'>alert('Please input date is correct!.');</script>";
        return view('home');
      }

    }

    public function rent($car_id, Request $Request){
      $car = Car::where('id', $car_id)->first();
      return view('rent')->with(['start'=>$Request->start,'end'=>$Request->end,'car'=>$car]);
    }
    public function addname($car_name, Request $Request){
      $rent = rent::all()->first();
      $rent->car_name = $car_name;
      $rent->date_of_start = $Request->start;
      $rent->date_of_end = $Request->end;
      $rent->idcard = $Request->idcard;
      $rent->name = $Request->name;
      $rent->tel = $Request->tel;
      $rent->address = $Request->address;
      $rent->save();
      return view('home');
    }
}
