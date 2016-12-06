@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>information</title>
  </head>
  <style media="screen">
  .truncate{
    display: -webkit-box;
    -webkit-line-clamp : 4;
  overflow: hidden;
  -webkit-box-orient: vertical;
  }
  </style>
  <body>

    <div class="container">
    <div class="title m-b-md" style="font-size:44px">
        <center>List Car all
    </div><br><br>
        <div class="row">
          @foreach($car as $car)
          <div class="col-sm-4">
          <div class="card">
              <img class="card-img-top" src="img/{{$car->id}}.jpg" alt="Card image cap" width="289px" height="220px">
                <div class="card-block">
                  <h4 class="card-title">{{$car->car_name}}</h4>
                  <p class="truncate">{{$car->details}}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Brand : {{$car->brand}}</li>
                    <li class="list-group-item">Type : {{$car->type}}</li>
                    <li class="list-group-item">Price : {{$car->price}} baht/day</li>
                  </ul>
                  <div class="card-block">
                    <form action="{{ route('car.details', ['car_id' => $car->id]) }}" method="get">
                      {{ csrf_field() }}
                      {{-- {{ method_field('PATCH') }} --}}
                    <left><button type="submit" class="btn btn-success btn-sm" style="float: right;">view details>></button>
                    </form>
                  </div>
                </div>
              </div>











            @endforeach
        </div>
    </div>
  </body>
</html>
@endsection
