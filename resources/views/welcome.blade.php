@extends('layouts.app')

@section('title', ' > '.__('Home'))



@section('content')

<div class="grid grid-rows-2 grid-flow-col gap-4">
   <h1>{{ __('What do you want to record ?')}}</h1>
   <div class="grid grid-cols-1 gap-4">
        @foreach($links as $title => $url)
        <div>
            <a href={{$url}} class="
            rounded-lg 
            px-3 py-2
            text-slate-700
            font-medium
            bg-slate-50
            hover:bg-slate-100
            hover:text-slate-900">
            {{$title}}
            </a>
        </div>
        @endforeach
    </div>
     
   
</div>
@endsection