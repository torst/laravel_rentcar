@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <style media="screen">
          .title {
              font-size: 84px;
          }
          </style>
              <center>
                    <div class="title m-b-md">
                        Rent Car
                    </div><br>
                    <form action="{{ url('/car') }}" method="get">
                      Start_Date : <input type="date" name="start"><br><br>
                      End_Date   : <input type="date" name="end"><br>
                      <br><button type="submit" class="btn btn-primary">Search</button>
                    </form>
                <br><br>

        </div>
    </div>
</div>
@endsection
