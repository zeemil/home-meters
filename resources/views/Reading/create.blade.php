@extends('layouts.app')

@section('title', ' > '.__('Add a reading') )

@section('content')
<x-h1>Add a reading for meter: {{ $meter->ean_code.' '.$meter->name}} </x-h1>

<form method="POST" action="{{ route('readings.store',['meter' => $meter->id])}}">
    @csrf
    <input type="hidden" name="meter_id" value="{{$meter->id}}">
    
    <div class="grid grid-cols-1 gap-4">
        <div class="">
        <label for="value" class="block font-medium text-gray-700">{{ __('Index value: ')}}</label>
        <input id="value" type="text" name="value" 
        class="rounded-md ps-2 border-solid border-2 border-gray-700 w-40"
        value="{{ old('value','')}}"/> 
        <span class="text-gray-500">
        {{ $meter->unit }}
        </span>
        @error('value')
            <div class="">{{ $message }}</div>
        @enderror
    </div>

        <div class="">
        <label for="date" class="block font-medium text-gray-700">{{ __('Index date: ')}}</label>
        <input id="date" type="date" name="date" 
        class="rounded-md ps-2 border-solid border-2 border-gray-700 w-40"
        value="{{ old('date','')}}"/>
        @error('date')
            <div class="">{{ $message }}</div>
        @enderror
        </div>

        <div class="">

        <label for="isOfficial" class="block font-medium text-gray-700">
            {{ __('Is it an official index ? ')}}
        </label>
        <select id='isOfficial' name='isOfficial' 
        class="rounded-md ps-2 border-solid border-2 border-gray-700 w-40">
            <option value=""></option>
            <option value="1">true</option>
            <option value="0">false</option>
        </select>
        @error('isOfficial')
            <div class="">{{ $message }}</div>
        @enderror

        </div>
        
    <div  class="rounded-md bg-green-500 w-20 text-center">
        <input type="submit" value="{{__('Save')}}"/>
        
    </div>
</form>
@endsection