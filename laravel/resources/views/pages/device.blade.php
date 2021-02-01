@extends('layouts.main-layout')

@section('content')
    <H1>DEVICE:</H1>

    NAME: {{ $device -> name }}<br>
    TYPE: {{ $device -> type }} <br>
    PRICE: {{ $device -> price }} <br>
    CONSUMPTION: {{ $device -> consumption }}

@endsection