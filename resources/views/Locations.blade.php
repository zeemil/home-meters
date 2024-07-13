@extends('layouts.app')

@section('title', 'Locations')

@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

   <h1> Locations</h1>
   
    <ul>
    @foreach ($locations as $location)
        <li>{{ $location->street }}, {{ $location->zip  }}, {{ $location->city }}</li>
    @endforeach
    </ul>
@endsection
