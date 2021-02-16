@extends('layouts.app')

@section('buttons')
    <a class="btn btn-primary" href="{{ route('bookings.create') }}" role="button">Tilføj ny booking</a>

    <div class="col-sm-9">
        <a href="/" class="btn btn-secondary">Tilbage</a>
    </div>
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Værelse</th>
            <th>Start Dato</th>
            <th>Slut Dato</th>
            <th>Reserveret</th>
            <th>Betalt</th>
            <th>Påbegyndt</th>
            <th>Afsluttet</th>
            <th>Oprettet</th>
            <th class="Actions">Handling</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->room->number }} {{$booking->room->roomType->name}}</td>
                <td>{{ date('F d, Y', strtotime($booking->start)) }}</td>
                <td>{{ date('F d, Y', strtotime($booking->end)) }}</td>
                <td>{{ $booking->is_reservation ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->is_paid ? 'Yes' : 'No' }}</td>
                <td>{{ (strtotime($booking->start) < time()) ? 'Yes' : 'No' }}</td>
                <td>{{ (strtotime($booking->end) < time()) ? 'Yes' : 'No' }}</td>
                <td>{{ date('F d, Y', strtotime($booking->created_at)) }}</td>
                <td class="actions">
                    <a
                        href="{{ action('App\Http\Controllers\BookingController@show', ['booking' => $booking->id]) }}"
                        alt="View"
                        title="View">
                        Vis
                    </a>
                    <a
                        href="{{ action('App\Http\Controllers\BookingController@edit', ['booking' => $booking->id]) }}"
                        alt="Edit"
                        title="Edit">
                        Ret
                    </a>
                    <form action="{{action('App\Http\Controllers\BookingController@destroy', ['booking' => $booking->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Slet</button>
                    </form>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
