@extends('layouts.app')

@section('header')
    <h1 class="text-white text-xl font-bold">CREATE A NEW USER</h1>
@endsection

@section('main')
<div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <form action="{{ route('users.store') }}" method="post" class="md:w-4/5 mx-auto py-5"> 
        @csrf

        <div class="mb-4">
            <label for="title">Name</label>
            <input id="title" name="name" type="text" class="border-gray-300 rounded block w-full">
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="border-gray-300 rounded block w-full"></textarea>
          
              
        </div>

         <div class="mb-4">
            <label for="location">rate</label>
            <input id="location" type="text" name="rate" class="border-gray-300 rounded block w-full">
         
        </div>

        <div class="mb-4">
            <label for="lower_range">Currency</label>
            <select name="currency" class="border-gray-300 rounded block w-full">
                <option value="GBP">GBP</option>
                 <option value="USD">USD</option>
                 <option value="EUR">EUR</option>
            </select>
           
        </div>

      
        <button type="submit" class="text-white bg-green-600 p-2">Create</button>

    </form>
    </div>
@endsection