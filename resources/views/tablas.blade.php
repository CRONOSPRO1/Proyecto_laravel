@extends('layouts.plantilla')


@section('contenedor')
hola
@endsection

@section('centro')
    <p>Centro</p>
    
    @foreach ($alumnos as $item)
    @include('layouts.card')    
    {{$item}}.<br>
    @endforeach

@endsection

@section('footer')
    <p>Pie</p>
@endsection