@extends('layouts.main')
@section('title', 'home')
    
@section('content')
<div class="container">
 <h1>Treni in programma di arrivo:</h1>   
 <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Company</th>
        <th scope="col">Stazione Di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Treno n</th>
      </tr>
    </thead>
    @foreach ($trains as $train)
       <tbody>
      <tr>
        <th scope="row"></th>
        <td>{{$train->company}}</td>
        <td>{{$train->station_departure}}</td>
        <td>{{$train->arrival_station}}</td>
        <td>{{$train->departure_time}}</td>
        <td>{{$train->arrive_time}}</td>
        <td>{{$train->train_code}}</td>
      </tr>
    </tbody> 
    @endforeach
  </table>
</div>

@endsection