@extends('layout')
@section('contend')

Ez egy saját view: {{ $name }}, adat: '{{ $adat }}'
<hr>
@foreach ($todos as $todo)
    <p>This is todo {{ $todo->id }}, {{ $todo->title }}</p>
@endforeach

@endsection