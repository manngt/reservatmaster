@extends('layouts.mastersite')
@section('content')

    <div class="row">
        <div class="carousel carousel-slider" data-indicators="true">
            @foreach($banner_images as $banner_image)
            <a class="carousel-item"><img src="{{asset('images/banners/'.$banner_image->image)}}"></a>
            @endforeach
        </div>
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
    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
@endsection