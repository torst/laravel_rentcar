<?php

namespace App\Http\Controllers;
use App\Car;
use App\rent;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      elseif ($start < $end) {
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
    public function addname($car_id, Request $Request){
      $car = Car::where('id', $car_id)->first();
      $car->date_of_start = $Request->start;
      $car->date_of_end = $Request->end;
      $car->idcard = '';
      $car->name = '';
      $car->tel = '0';
      $car->address = '';
      $car->save();
      $car = DB::table('car')->insertGetId(
    ['id' => '11', 'car_name' => $car->car_name,'brand' => $car->brand, 'type' => $car->type, 'price' => $car->price, 'details' => $car->details, 'date_of_start' => $Request->start, 'date_of_end' => $Request->end,
    'idcard' => $Request->idcard, 'name' => $Request->name, 'tel' => $Request->tel, 'address' => $Request->address, 'Login_name' => Auth::user()->name]
);

      return view('home');
    }
}
