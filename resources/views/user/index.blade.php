@extends('layouts.master')
@section('content')

    <div id="table-datatables">
        <h4 class="header">Paises</h4>
        <div class="row">
            <div class="col s12">
                <p>Listado de paises</p>
            </div>
            <div class="col s12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Nacimiento</th>
                        <th>Profesión</th>
                        <th>Foto</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Nacimiento</th>
                        <th>Profesión</th>
                        <th>Foto</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->birthday}}</td>
                            <td>{{$user->position}}</td>
                            <td><img src="{{asset('images/user/'.$user->picture)}}"></img></td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="form-group col s12">

                                    <form action="{{route('user.destroy',$user->id)}}" method="POST" style="display: inline">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <a class="btn-flat" href="{{ route('user.edit',$user->id) }}">
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
                <a href="{{route('user.create')}}" class="btn-floating blue">
                    <i class="material-icons">create</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Floating Action Button -->

@endsection