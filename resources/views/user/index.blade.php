@extends('layouts.app')

@section('header')
    <h1 class="text-white text-xl font-bold">Users</h1>
@endsection



    

@section('main')
  <a href="users/create" class="text-white bg-green-600 p-2">Create a new user</a>

   <div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Rate</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      
      <td>{{ $user->name  }}</td>
      <td>{{ $user->description  }}</td>
      <td>{{ $user->rate  }} {{ $user->currency  }}</td>
      <td><a href="users/{{ $user->id  }}" >Convert rate   </a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection