@extends('layouts.mastersite')
@section('content')

    <div class="row">
        <div class="carousel carousel-slider" data-indicators="true">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
        </div>
    </div>

    <div class="row responsive">

        <div class="col l4 s12">
            <h1>Articulo 1</h1>
            <p>Soy el articulo 1</p>
        </div>

        <div class="col l4 s12">
            <h1>Articulo 1</h1>
            <p>Soy el articulo 1</p>
        </div>

        <div class="col l4 s12">
            <h1>Articulo 1</h1>
            <p>Soy el articulo 1</p>
        </div>

    </div>

@endsection
@section('scripts')
<script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
@endsection