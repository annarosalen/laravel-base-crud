@extends('layouts.main-layout')

@section('content')

    <h1>DEVICES:</h1>

    <a href="{{route('device-create')}}">CREA NUOVO DEVICE</a>

    @foreach ($devices as $device)

        <li>
            <a href="{{route ('device-show', $device -> id)}}">
                NAME: {{ $device -> name }}<br>
                TYPE: {{ $device -> type }} <br>
                PRICE: {{ $device -> price }} <br>
                CONSUMPTION: {{ $device -> consumption }}           
            </a>
            
            

        </li>
        
    @endforeach
    
@endsection