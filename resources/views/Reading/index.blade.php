@extends('layouts.app')

@section('title', ' > '.__('Readings for meter') .':'.  $meter->ean_code)

@php
$headers = [
    __('ID'),
    __('value'),
    __('Unit'),
    __('Is Official'),
    __('Date'),
    __('Actions')
];
@endphp

@section('json-data')
    const data = {!! $readings->toJson() !!}
@endsection

@push('scripts')
  @vite(['resources/js/chart.js' ])
@endpush


@section('content')
 
   <h1 class="text-lg font-bold">{{__('Readings for meter').' : '.  $meter->ean_code }}</h1>
   <x-link href="{{ route('readings.create', ['meter' => $meter->id] )}}">
    Add reading
   </x-link>
 
   
   <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>
   <table class="table-auto w-">
    <thead>
    <tr>
        @foreach($headers as $header)
        <th border-b dark:border-slate-600 font-medium  p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left>
           {{ $header }}
        </th>
        @endforeach
    </tr>
    </thead>

    <tbody>

    @forelse ( $readings->sortByDesc('date') as $reading )

    <tr>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{$reading->id}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->value }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $meter->unit  }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->isOfficial ? 'yes' : '' }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->date }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            <form method="post" action="{{ route('readings.destroy',['meter' => $meter->id, 'reading'=> $reading->id]) }}">
                @csrf
                @method('delete')
                <button type="submit"> {{__('delete')}}</button>
            </form>
        </td>
    </tr>
    
    @empty

        <tr>
            <td colspan="5">{{ __('add reading') }}</td>
        </tr>

    @endforelse

    </tbody>
   </table>

   
    
@endsection
