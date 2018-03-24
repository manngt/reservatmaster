@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Crear Habitación</h4>
            <div class="row">
                <form class="col s12" action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('room.form')
                </form>
            </div>
        </div>
    </div>
@endsection