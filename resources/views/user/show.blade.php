@extends('layouts.app')

@section('header')
    <h1 class="text-white text-xl font-bold">User Details</h1>
@endsection



@section('main')


   <div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <h3 class="font-bold mb-3">{{ $user->name }}</h3>
    <h4 class="float-left mr-4 mb-3"> {{ $user->description}}</h4>
    
    <p class="clear-both mb-3">{{ $user->rate}} {{ $user->currency}}</p>
      <form method="POST" action="{{ route('currency.convert') }}">
         @csrf
    <select name="to_currency" Required> 

        <option value=""> Select Currency</option>
         <option value="GBP">GBP</option>
         <option value="USD">USD</option>
        <option value="EUR">EUR</option>


    </select> <br> <br>
      <label for="html">Local Driver</label>
<input type="radio"  name="driver" value="local" checked="checked">
<label for="css">External Driver</label>
<input type="radio" name="driver" value="external">

        <input name="amount" value="{{ $user->rate }}" type="hidden" >
        <input name="from_currency" value="{{ $user->currency }}" type="hidden" ><br> <br>
         
    <button type="submit" class="bg-green-600 text-white rounded-sm px-9">Convert</button>
</form>
</div>
@endsection