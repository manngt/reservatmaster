@extends('layouts.master')
@section('content')

    <div id="table-datatables">
        <h4 class="header">Reservaciones</h4>
        <div class="row">
            <div class="col s12">
                <p>Listado de reservaciones</p>
            </div>
            <div class="col s12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Habitación</th>
                        <th>Huesped</th>
                        <th>Estado</th>
                        <th>Origen</th>
                        <th>Vigencia Hrs</th>
                        <th>Inicia</th>
                        <th>Finaliza</th>
                        <th>Día</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Habitación</th>
                        <th>Huesped</th>
                        <th>Estado</th>
                        <th>Origen</th>
                        <th>Vigencia Hrs</th>
                        <th>Inicia</th>
                        <th>Finaliza</th>
                        <th>Día</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->id}}</td>
                            <td>{{$reservation->User->name.' '.$reservation->User->lastName}}</td>
                            <td>{{$reservation->Room->number}}</td>
                            <td>{{$reservation->Client->first_name.' '.$reservation->Client->last_name}}</td>
                            <td>{{$reservation->ReservationStatus->name}}</td>
                            <td>{{$reservation->ReservationSource->name}}</td>
                            <td>{{$reservation->ReservationTime->duration}}</td>
                            <td>{{$reservation->start}}</td>
                            <td>{{$reservation->ends}}</td>
                            <td>{{$reservation->day}}</td>
                            <td>
                                <div class="form-group col s12">

                                    <form action="{{route('reservation.destroy',$reservation->id)}}" method="POST" style="display: inline">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <a class="btn-flat" href="{{ route('reservation.edit',$reservation->id) }}">
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
                <a href="{{route('reservation.create')}}" class="btn-floating blue">
                    <i class="material-icons">create</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Floating Action Button -->

@endsection