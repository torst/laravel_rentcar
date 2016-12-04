@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{ route('car.addname', ['car_name' => $car->car_name]) }}" method="get">
    {{ csrf_field() }}
    {{-- {{ method_field('PATCH') }} --}}
    ID-Card : <input type="text" name="idcard"><br>
    Name : <input type="text" name="name"><br>
    Tel : <input type="text" name="tel"><br>
    Address :<br><textarea name="address" rows="4" cols="50"></textarea><br>
    <input type="date" name="start" value="{{$start}}" hidden=""><br>
    <input type="date" name="end" value="{{$end}}" hidden="">
    Model : {{$car->car_name}}<br>
    Type : {{$car->type}}<br>
    Price : {{$car->price}} Baht/day <br>
    Start : {{$start}}<br>
    End : {{$end}}<br>
    <input type="text" name="car_name" value="{{$car->car_name}}" hidden="">
    <?php
    $datestart = new DateTime(($start));
    $dateend = new DateTime(($end));
    $interval = $datestart->diff($dateend);
    echo "You just borrow " ?>{{$car->car_name}}
    <?php
    echo "according to schedule : ", $interval->format('%a days');
     ?><br>
     Price all : {{$car->price}}*<?php echo $interval->format('%a days'); ?> <br>

    <button type="submit">rent</button>
    </form>
  </body>
</html>
@endsection
