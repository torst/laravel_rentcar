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
          <img src="img/{{$car->id}}.jpg" alt="Car" width="200px"><br>
          {{$car->details}}
    </div>
  </body>
</html>
@endsection
