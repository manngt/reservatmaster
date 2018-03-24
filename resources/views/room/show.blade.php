@extends('layouts.master')
@section('content')


<div class="col s12 m6 l6">
    <div class="card">
        <div class="card-image">
            <img src="{{ asset($room->picture_path.'/'.$room->picture) }}" alt="sample">
            <span class="card-title">{{'Habitación: '.$room->number}}</span>
        </div>
        <div class="card-content">

            <ul>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">more</i>
                        {{ $room->room_type->name }}
                       </div>

                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">room</i>
                        {{ $room->location->name }}
                    </div>

                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">attach_money</i>
                        {{$room->cost}}
                    </div>

                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">local_offer</i>
                        {{$room->price}}
                    </div>

                </li>
            </ul>
        </div>
    </div>
</div>
@endsection