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

                Start_Date : <input type="date"><br><br>
                End_Date   : <input type="date"><br>
                <br><button type="submit" name="button">Search</button>
                <br><br>

        </div>
    </div>
</div>
@endsection
