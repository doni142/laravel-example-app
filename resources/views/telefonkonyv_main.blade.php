@extends('layout')
@section('contend')

<h1>Telefonkonyv bejegyzés hozzáadása</h1>
@if(!isset($telefonkonyv))
<form action="/telefonkonyv" method="post">
@else
<form action="/telefonkonyv/{{ $telefonkonyv->id }}" method="post">
@method('patch')
@endif
    @csrf
    
    <div style="display: flex; flex-direction:column-reverse;">
        <label for="fname">név:</label>
        <input type="text" name="name" id="fname" @isset($telefonkonyv) value="{{ $telefonkonyv->name }}" @endisset>
        @error('name')
        <div style="border: 1px dashed red;">
        {{$message}}
        </div>
        @enderror
    </div>
    <div>
        <label for="fnumber">telefonszám:</label>
        <input type="text" name="number" id="fnumber" @isset($telefonkonyv) value="{{ $telefonkonyv->number }}" @endisset> 
        @error('number')
        <div style="border: 1px dashed red;">
                {{$message}} 
        </div>
        @enderror 
    </div>
    <input type="submit" value="Új telefonkönyv bevitel">
</form>
@isset ($message)
<div style="border: 2px solid green; padding: 1em; text-align:center; margin: 0 20em 0 5em;">    
    {{ $message }}
</div>
@endisset

@endsection
@section('head')
<style>
    input, label {
        display: block; 
    }
</style>
@endsection