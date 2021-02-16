@extends('layouts.app')

<dt class="col-sm-3">Navn</dt>
<dd class="col-sm-9">@foreach($booking->users as $user){{$user->name}}@endforeach</dd>

<dt class="col-sm-3">ID</dt>
<dd class="col-sm-9">{{ $booking->id }}</dd>

<dt class="col-sm-3">Room ID</dt>
<dd class="col-sm-9">{{ $booking->room_id }}</dd>

<dt class="col-sm-3">Start Dato</dt>
<dd class="col-sm-9">{{ date('F d, Y', strtotime($booking->start)) }}</dd>

<dt class="col-sm-3">Slut Dato</dt>
<dd class="col-sm-9">{{ date('F d, Y', strtotime($booking->end)) }}</dd>

<dt class="col-sm-3">Resreveret</dt>
<dd class="col-sm-9">{{ $booking->is_reservation ? 'Yes' : 'No' }}</dd>

<dt class="col-sm-3">Betalt</dt>
<dd class="col-sm-9">{{ $booking->is_paid ? 'Yes' : 'No' }}</dd>

<dt class="col-sm-3">Noter</dt>
<dd class="col-sm-9">{{ $booking->room_id }}</dd>

<dt class="col-sm-3">Oprettet</dt>
<dd class="col-sm-9">{{ date('F d, Y', strtotime($booking->created_at)) }}</dd>

<dt class="col-sm-3">Ændret</dt>
<dd class="col-sm-9">{{ date('F d, Y', strtotime($booking->updated_at)) }}</dd>

