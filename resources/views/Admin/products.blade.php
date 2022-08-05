@extends('layouts.admin-app')

@section('content')
@if ($products->count())    
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Category</th>
    <th scope="col">Product Name</th>
    </tr>
    </thead>
    @php
        $no=1;
    @endphp
    @foreach ($products as $product)
            <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$product->category->category_name}}</td>
            <td>{{$product->product_name}}</td>
            </tr>
    @endforeach
@else
    <div class="alert alert-primary" role="alert">
        No Products
    </div>
@endif
@if ($products->links())
    {{$products->links()}}
@endif

@endsection