@extends('layouts.main-layout')

@section('content')

    <h1>CREA NUOVO DEVICE</h1>

    <form action="{{route ('device-store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="name"></label>
        <input type="text" name="name">

        <br>

        <label for="type"></label>
        <input type="text" name="type">

        <br>

        <label for="price"></label>
        <input type="text" name="price">

        <br>

        <label for="consumption"></label>
        <input type="text" name="consumption">

        <br>

        <input type="submit" value="SALVA">


    </form>

@endsection
