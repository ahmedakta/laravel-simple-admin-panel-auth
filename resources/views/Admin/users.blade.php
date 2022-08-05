@extends('layouts.admin-app')

@section('content')
@if ($users->count())    
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email </th>
    <th scope="col">Role</th>
    <th scope="col">Status</th>
    </tr>
  </thead>
  @php
      $no=1;
  @endphp
  @foreach ($users as $user)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role == 1 ? 'Admin' : 'User'}}</td>
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Set Status
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  {{-- <form action="{{route('set')}}" method="POST"></form> --}}
                  {{-- <a class="dropdown-item" href="{{route('set.status',compact($user,0))}}">null</a> --}}
                  {{-- <a class="dropdown-item" href="{{route('set.status',compact($user,1))}}">Premium Status</a> --}}
                </div>
              </div>
            </td>
          </tr>
  @endforeach
@else
  <div class="alert alert-primary" role="alert">
      No users
  </div>
@endif

@endsection