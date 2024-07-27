@extends('layouts.app')

@section('title', ' > '.__('Locations'))

@php
$headers = [
    __('ID'),
    __('Street'),
    __('Zip'),
    __('City'),
    __('Actions')
];
@endphp
@section('content')
 
    

   <h1 class="text-lg font-bold">{{__('Locations')}}</h1>
   <x-link href="{{ route('locations.create') }}">add location</x-link>
   <table class="table-auto w-">
    <thead>
    <tr>
        @foreach($headers as $header)
        <th 
        border-b 
        dark:border-slate-600 
        font-medium 
        p-4 pl-8 pt-0 pb-3 
        text-slate-400 
        dark:text-slate-200 
        text-left>
           {{ $header }}
        </th>
        @endforeach
    </tr>
    </thead>

    <tbody>

    @forelse ( $locations as $location )

    <tr>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{$location->id}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $location->street }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $location->zip  }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $location->city }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            <x-link href="{{ route('meters.index',['location' => $location->id])}}">meters</x-link></td>
    </tr>
    
    @empty

        <tr>
            <td colspan="5">{{ __('add location') }}</td>
        </tr>

    @endforelse

    </tbody>
    

@endsection
