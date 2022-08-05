@extends('layouts.admin-app')

@section('content')
@if ($customers->count())    
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Contact Add</th>
        <th scope="col">Adress</th>
        </tr>
    </thead>
    @php
        $no = 1;
    @endphp
    @foreach ($customers as $customer)
        <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->contact_add}}</td>
        <td>{{$customer->adress}}</td>
        </tr>
    @endforeach
@else
    <div class="alert alert-primary" role="alert">
        No Customers
    </div>
@endif

@endsection