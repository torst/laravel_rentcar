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
          {{'why brandner is not show same page other. kittichod pls help me.'}}
          <br>
          <img src="img/{{$car->id =='1'}}.jpg" alt="Car" width="200px"><br>
          {{'Car : '}}
          {{$car->car_name}}<br>
          {{'details : '}}
          {{$car->details}}

          <form action="{{ url('/information') }}" method="get">
            <button type="submit" >back</button>
          </form>
    </div>
  </body>
</html>
@endsection
