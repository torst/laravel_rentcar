@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="title m-b-md" style="font-size:44px">
          <center>Select car for rent
      </div><br><br>
        <div class="row">
    @foreach($car as $car)
    @if($start > $car->date_of_start && $end < $car->date_of_end)
    {{1}}
    @elseif(($start > $car->date_of_start && $start < $car->date_of_end) || ($end >= $car->date_of_start && $end <= $car->date_of_end))
    {{2}}
    @elseif($start == $car->date_of_start || $end==$car->date_of_end)
    {{3}}
    @elseif($car->date_of_start > $start && $car->date_of_end < $end)
    {{4}}
    @else
    <div class="col-sm-4">
      <img src="img/{{$car->id}}.jpg" alt="Car" width="200px"><br>
      Name : {{$car->car_name}}<br>
      Brand : {{$car->brand}}<br>
      Type : {{$car->type}}<br>
      Price : {{$car->price}} baht/day<br>
      <form action="{{ route('car.rent', ['car_id' => $car->id]) }}" method="get">
        {{ csrf_field() }}
        {{-- {{ method_field('PATCH') }} --}}
        <input type="date" name="start" value="{{$start}}" hidden=""><br>
        <input type="date" name="end" value="{{$end}}" hidden="">
      <center><button type="submit" class="btn btn-success btn-sm">rent car!</button>
        <br><br><br>
      </form>
    </div>
    @endif
    @endforeach
  </div>
</div>
  </body>
</html>
@endsection
