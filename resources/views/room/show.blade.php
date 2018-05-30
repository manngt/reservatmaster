@extends('layouts.master')
@section('content')


<div class="col s12 m6 l6">
    <div class="card">
        <div class="card-content">

            <div class="carousel">
                @foreach($room->RoomPictures as $picture)
                <a class="carousel-item"><img src="{{asset('images/rooms/'.$picture->picture)}}"></a>
                @endforeach
            </div>

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
                @foreach($room->RoomFeatures as $roomFeature)
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">local_offer</i>
                            {{$roomFeature->feature}}
                        </div>

                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>

@endsection