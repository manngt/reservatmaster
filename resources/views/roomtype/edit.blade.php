@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Editar Tipo de Habitación</h4>
            <div class="row">
                <form class="col s12" action="{{route('roomtype.update',$room_type->id)}}" method="POST">
                    {{method_field('PATCH')}}
                    @csrf
                    @include('roomtype.form')
                </form>
            </div>
        </div>
    </div>
@endsection