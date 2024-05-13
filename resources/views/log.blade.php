@extends('layouts.main')
@section('container')
    <h2>{{ $log["log"] }} ({{ $log["id"] }})</h2>
    <h2>Value: {{ $log["current_value"] }}</h2>

    <a href="/devices">back to Devices</a>
@endsection
