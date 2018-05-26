@extends('layouts.master')
@section('content')


    <div class="col s12 m6 l6">
        <div class="card">
            <div class="card-content">

                <table>
                    <thead>
                    <tr>
                        <th>Cuenta</th>
                        <th>Monto</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>{{$venta->check_id}}</td>
                            <td>{{$venta->total}}</td>
                        </tr>
                    @endforeach
                </table>


            </div>
        </div>
        <div class="card">
            <div class="card-content">

               <table>
                    <thead>
                    <tr>
                        <th>Habitación</th>
                        <th>Cantidad</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($top_rooms as $top_room)
                        <tr>
                            <td>{{$top_room->room_id}}</td>
                            <td>{{$top_room->cantidad}}</td>
                        </tr>
                    @endforeach
                </table>


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