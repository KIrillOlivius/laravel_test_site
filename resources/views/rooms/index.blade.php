@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Værelses nr.</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{$room->number}}</td>
                    <td>{{$room->roomType->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-secondary">Tilbage</a>
@endsection
