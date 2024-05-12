@extends('layouts.main')
@section('container')
    <h1>Devices</h1>

    <h2> {{ $name }}</h2>
    <h4> Maximum value : {{ $max_value }}</h4>
    <h4> Minimum value : {{ $min_value }}</h4>
    <h4> Current value : {{ $current_value }}</h4>
@endsection


