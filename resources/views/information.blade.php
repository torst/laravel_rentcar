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
        <div class="row">
          @foreach($car as $car)
            <div class="col-sm-4">
              <img src="img/{{$car->id}}.jpg" alt="Car" width="70%"><br>
              Name : {{$car->car_name}}<br>
              Brand : {{$car->brand}}<br>
              Type : {{$car->type}}<br>
              Price : {{$car->price}} baht/day<br><br><br><br>
            </div>
            @endforeach
        </div>
    </div>
  </body>
</html>
@endsection
