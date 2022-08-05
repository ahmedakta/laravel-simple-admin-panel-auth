@extends('layouts.admin-app')

@section('content')
@if ($payments->count())    
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Category</th>
    <th scope="col">Date</th>
    </tr>
  </thead>
      @php
          $no = 1;
      @endphp
  @foreach ($payments as $payment)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$payment->category->category_name}}</td>
            <td>{{$payment->date}}</td>
          </tr>
  @endforeach
@else
    <div class="alert alert-primary" role="alert">
      No Payments
    </div>
@endif
@endsection