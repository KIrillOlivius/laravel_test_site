@extends('layouts.app')

@section('content')
    <div class="marketing">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Hej og Velkommen<span class="text-muted"> til denne simpel Demo side.</span></h2>
                <p class="lead">Håber I er friske på at tage et lille kig på denne simpel side som er blot en Demo på hvordan jeg kan bruge Laravel frameworket, til hvis formål har jeg lavet et simpelt projekt med hotelværelses booking system, hvor man kan oprette, rette, slette og se forskellige bookings, samt eksportere det til en PDF-fill.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#8d1c4d" dy=".3em">Laravel(8)</text></svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Se tilgængelige værelser. <span class="text-muted">Only a click away !</span></h2>
                <p class="lead">Klik på billedet eller knappen nedunder for at se tabellen med hotelværelses typer. Dette er en demonstration af hvordan MVC-pattern er implementeret i Laravel, hvor man kan finde Modellen: Room, Controlleren: ShowRoomController og View: rooms.index </p>
                <a href="{{ route('rooms.index') }}" class="btn btn-secondary ">Rooms</a>
            </div>
            <div class="col-md-5">
                <a href="{{ route('rooms.index') }}">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#1d5b7e"/><text x="50%" y="50%" fill="#fff" dy=".3em">Rooms</text></svg>
                </a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Administrer bookinger <span class="text-muted">Se hele bookingsliste her !</span></h2>
                <p class="lead">Klik på billedet eller knappen nedunder for at se eller administrer en booking. En lidt mere udfoldet demonstration af Routing og Resource controller i Laravel</p>
                <a href="{{ route('bookings.index') }}" class="btn btn-secondary ">Bookings</a>
            </div>
            <div class="col-md-5 order-md-1">
                <a href="{{ route('bookings.index') }}">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#c3ac92"/><text x="50%" y="50%" fill="#fff" dy=".3em">Bookings</text></svg>
                </a>
            </div>
        </div>

    </div>
@endsection
