@extends('layouts.main')
@section('container')
    <h1>Logs</h1>

    @php
    $i = 1;
    @endphp
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Log Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>
                    <a href="/logs/{{ $log["id"] }}">{{ $log["id"] }}</a>
                </td>
                <td>{{ $log["name"] }}</td>
            </tr>
            @php
                $i++;
            @endphp
        @endforeach
        </tbody>
    </table>
@endsection
