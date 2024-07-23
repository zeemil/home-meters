@extends('layouts.app')

@section('title', ' > '.__('Readings for meter') .':'.  $meter->ean_code)

@php
$headers = [
    __('ID'),
    __('value'),
    __('Unit'),
    __('Is Official'),
    __('Created at'),
    __('Updated at')
];
@endphp

@section('json-data')
    const data = [
      { created_at: '2024-06-14', value: 4635 },
      { created_at: '2024-05-25', value: 4533 },
      { created_at: '2024-04-24', value: 4434 },
      { created_at: '2024-03-17', value: 4243 },
      { created_at: '2024-03-01', value: 4160 },
    ];
@endsection

@push('scripts')
  @vite(['resources/js/chart.js' ])
@endpush


@section('content')
 
   <h1 class="text-lg font-bold">{{__('Readings for meter').' : '.  $meter->ean_code }}</h1>
   <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>
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

    @forelse ( $meter->readings as $reading )

    <tr>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{$reading->id}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->value }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->unit  }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->is_official  }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->created_at }}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 darkclass:text-slate-400">
            {{ $reading->updated_at }}</td>
    </tr>
    
    @empty

        <tr>
            <td colspan="5">{{ __('add reading') }}</td>
        </tr>

    @endforelse

    </tbody>
   </table>

   
    
@endsection
