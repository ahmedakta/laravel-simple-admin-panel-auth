@extends('layouts.admin-app')

@section('content')
@if ($sellers->count())    
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Product Name</th>
    <th scope="col">Name</th>
    </tr>
  </thead>
      @php
          $no = 1;
      @endphp
  @foreach ($sellers as $seller)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$seller->user->name}}</td>
            <td>{{$seller->product->product_name}}</td>
            <td>{{$seller->name}}</td>
          </tr>
  @endforeach
@else
    <div class="alert alert-primary" role="alert">
      No Sellers
    </div>
@endif
@endsection