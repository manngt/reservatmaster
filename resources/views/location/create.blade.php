@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Crear Ubicación</h4>
            <div class="row">
                <form class="col s12" action="{{route('location.store')}}" method="POST">
                    @csrf
                    @include('location.form')
                </form>
            </div>
        </div>
    </div>
@endsection