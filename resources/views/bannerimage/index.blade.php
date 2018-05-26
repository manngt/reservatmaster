@extends('layouts.master')
@section('content')

    <div id="table-datatables">
        <h4 class="header">Portada</h4>
        <div class="row">
            <div class="col s12">
                <p>Administrar Portada</p>
            </div>
            <div class="col s12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>orden</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Imagen</th>
                        <th>Orden</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($banner_images as $banner_image)
                    <tr>
                        <td><img width="300" height="200" src="{{asset('images/banners/'.$banner_image->image)}}"/></td>
                        <td>{{$banner_image->order}}</td>
                        <td>
                            <div class="form-group col s12">

                                <form action="{{route('bannerimage.destroy',$banner_image->id)}}" method="POST" style="display: inline">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <a class="btn-flat" href="{{ route('bannerimage.edit',$banner_image->id) }}">
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
                <a href="{{route('bannerimage.create')}}" class="btn-floating blue">
                    <i class="material-icons">create</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Floating Action Button -->

@endsection