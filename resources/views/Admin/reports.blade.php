@extends('layouts.admin-app')

@section('content')
@if ($reports->count())    
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Customer</th>
    <th scope="col">Order</th>
    <th scope="col">Product</th>
    <th scope="col">Payment</th>
    </tr>
    </thead>
        @php
            $no = 1;
        @endphp
    @foreach ($reports as $report)
            <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$report->customer->name}}</td>
            <td>{{$report->shoppingOrder->date}}</td>
            <td>{{$report->product->product_name}}</td>
            <td>Payment</td>
            </tr>
    @endforeach
@else
    <div class="alert alert-primary" role="alert">
        No Reports
    </div>
@endif
@endsection