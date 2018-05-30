@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Editar Caracteristica</h4>
            <div class="row">
                <form class="col s12" action="{{route('roomfeature.update',$room_feature->id)}}" method="POST" enctype="multipart/form-data">
                    {{method_field('PATCH')}}
                    @csrf
                    @include('roomfeature.form')
                </form>
            </div>
        </div>
    </div>
@endsection
