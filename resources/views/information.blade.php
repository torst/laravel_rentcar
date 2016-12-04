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
        <center>List Car all
    </div><br><br>
        <div class="row">
          @foreach($car as $car)
            <div class="col-sm-4">
              <img src="img/{{$car->id}}.jpg" alt="Car" width="200px"><br>
              Name : {{$car->car_name}}<br>
              Brand : {{$car->brand}}<br>
              Type : {{$car->type}}<br>
              Price : {{$car->price}} baht/day<br>
              <form action="{{ route('car.details', ['car_id' => $car->id]) }}" method="get">
                {{ csrf_field() }}
                {{-- {{ method_field('PATCH') }} --}}
              <center><button type="submit" class="btn btn-success btn-sm">view details>></button>
                <br><br><br>
              </form>
            </div>
            @endforeach
        </div>
    </div>
  </body>
</html>
@endsection
