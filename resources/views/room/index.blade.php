@extends('layouts.master')
@section('content')

    <div id="table-datatables">
        <h4 class="header">Habitaciones</h4>
        <div class="row">
            <div class="col s12">
                <p>Listado de habitaciones</p>
            </div>
            <div class="col s12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nro. Habitación</th>
                        <th>Ubicación</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nro. Habitación</th>
                        <th>Ubicación</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{$room->id}}</td>
                        <td>{{$room->number}}</td>
                        <td>{{$room->location->name}}</td>
                        <td>
                            <div class="form-group col s12">

                                <form action="{{route('room.destroy',$room->id)}}" method="POST" style="display: inline">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <a class="btn-flat" href="{{ route('room.show',$room->id) }}">
                                        <i class="material-icons indigo-text">info_outline</i>
                                    </a>
                                    <a class="btn-flat" href="{{ route('room.edit',$room->id) }}">
                                        <i class="material-icons green-text">mode_edit</i>
                                    </a>
                                    <button type="submit" class="btn-flat"> <i class="material-icons red-text">delete_forever</i></button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
        <a class="btn-floating btn-large">
            <i class="material-icons">add</i>
        </a>
        <ul>
            <li>
                <a href="{{route('room.create')}}" class="btn-floating blue">
                    <i class="material-icons">create</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Floating Action Button -->

@endsection