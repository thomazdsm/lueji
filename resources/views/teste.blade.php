@extends('layouts._main')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="position: relative;">
        <div class="carousel-inner" style="height: 100%">
            <div class="carousel-item active" style="height: 100%">
                <img class="d-block" src="{{ URL::asset('img/carousel1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item" style="height: 100%">
                <img class="d-block" src="{{ URL::asset('img/carousel2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item" style="height: 100%">
                <img class="d-block" src="{{ URL::asset('img/carousel3.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="" style="width: 100%; height: 500px;">
        <h1>Conteúdo</h1>
    </div>
@endsection
