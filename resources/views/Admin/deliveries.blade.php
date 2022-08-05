@extends('layouts.admin-app')

@section('content')
@if ($deliveries->count())    
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Customer</th>
    <th scope="col">Date</th>
    </tr>
  </thead>
      @php
          $no = 1;
      @endphp
  @foreach ($deliveries as $delivery)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$delivery->customer->name}}</td>
            <td>{{$delivery->date}}</td>
          </tr>
  @endforeach
@else
    <div class="alert alert-primary" role="alert">
      No Deliveries
    </div>
@endif
@endsection