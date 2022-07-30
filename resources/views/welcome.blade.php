@extends('layouts.appfront')

@section('content')
  <div class="col-sm-12">
      <h1 class="text-center font-weight-bold text-white mt-3 font-italic">DIFUSION TEC</h1>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ul>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
          <div class="carousel-item @if($loop->index==0) active @endif">
            <img src="{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->descripcion}}" width="400" height="500">
            <div class="carousel-caption d-none d-md-block pb-5">
                <h3 class="w-100 text-white font-weight-bold">{{$item->descripcion}}</h3>
                <a target="blank_" href="{{$item->link}}" class="btn btn-success my-2 my-sm-0g">IR</a>
            </div>
          </div>
          @empty
        @endforelse 
        </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>    
  </div>
  <div class="container bg-danger py-4"> </div>
@endsection
