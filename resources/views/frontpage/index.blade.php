@extends('layouts.mastersite')
@section('content')


    <div class="slider">
        <ul class="slides">

            @foreach($banner_images as $banner_image)
            <li>
                <img src="{{asset('images/banners/'.$banner_image->image)}}"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Paisajes asombrosos!</h3>
                    <h5 class="light grey-text text-lighten-3">Para que relajes</h5>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="row responsive">

        @foreach($articles as $article)

        <div class="col l6 s12 m6 xl6">
            <h1>{{$article->title}}</h1>
            <p>{{$article->article}}</p>
        </div>

        @endforeach
    </div>

@endsection
@section('scripts')
<script>

    $(document).ready(function(){
        $('.slider').slider();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
    });
</script>
@endsection