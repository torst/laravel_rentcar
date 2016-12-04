@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{ route('car.addname', ['car_id' => $car->id]) }}" method="get">
    {{ csrf_field() }}
    {{-- {{ method_field('PATCH') }} --}}
    ID-Card : <input type="text" name="idcard"><br>
    Name : <input type="text" name="name"><br>
    Tel : <input type="text" name="tel"><br>
    Address :<br><textarea name="address" rows="4" cols="50"></textarea><br>
    <button type="submit">rent</button>
    </form>
  </body>
</html>
@endsection
