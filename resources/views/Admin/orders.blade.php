@extends('layouts.admin-app')

@section('content')
@if ($orders->count())    
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
  @foreach ($orders as $order)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$order->customer->name}}</td>
            <td>{{$order->date}}</td>
          </tr>
  @endforeach
@else
    <div class="alert alert-primary" role="alert">
      No Orders
    </div>
@endif
@endsection