@extends('layouts.app')

@section('title', ' > '.__('Locations'))

@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

   <h1> Locations</h1>

    @livewire('location.index')
@endsection
