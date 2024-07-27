@extends('layouts.app')

@section('title', ' > '.__('Meters for location') .':'.  $location->id)

@php
$headers = [
    __('ID'),
    __('Code EAN'),
    __('Name'),
    __('Created at'),
    __('Updated at'),
    __('Action')
];
@endphp

@section('content')
   <h1 class="text-lg font-bold">{{__('Meters for location').' : '.  $location->street . ' '.$location->city}}</h1>
   
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

    @forelse ( $location->meters as $meter )

    <tr>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{$meter->id}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $meter->ean_code }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $meter->name  }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $meter->created_at }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $meter->updated_at }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            <x-link href="{{ route('readings.index',['meter' => $meter->id])}}">readings</x-link></td>
    </tr>
    
    @empty

        <tr>
            <td colspan="5">{{ __('add meter') }}</td>
        </tr>

    @endforelse

    </tbody>
   </table>

@endsection
