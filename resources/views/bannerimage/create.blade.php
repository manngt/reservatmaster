@extends('layouts.master')
@section('content')
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <h4 class="header2">Portada - Agregar Banner</h4>
            <div class="row">
                <form class="col s12" action="{{route('bannerimage.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('bannerimage.form')
                </form>
            </div>
        </div>
    </div>
@endsection