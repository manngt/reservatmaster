@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Editar País</h4>
            <div class="row">
                <form class="col s12" action="{{route('country.update',$country->id)}}" method="POST">
                    {{method_field('PATCH')}}
                    @csrf
                    @include('country.form')
                </form>
            </div>
        </div>
    </div>
@endsection
