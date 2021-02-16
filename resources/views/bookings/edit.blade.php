@extends('layouts.app')

@section('content')
    <div class="col">
        <form action="{{ route('bookings.update', ['booking' => $booking]) }}" method="POST">
            @method('PUT')
            @include('bookings.fields')

            <div class="buttons">
                <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Opdater reservation</button>
                    <div class="col-sm-9">
                        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Tilbage</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
