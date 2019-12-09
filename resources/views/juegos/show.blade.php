<h1>venta de juego</h1>

@extends('plantilla')

@section('contnav')

<h1 class="text-center">{{$juego->titulo}}</h1>

<div class="container">
  

<div class="card mb-3">
  <img src="{{asset('imagen/caru1.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$juego->titulo}}</h5>
    <p class="card-text">{{ $juego->descripcion}}</p>
    <hr>
    <h6 class="card-subtitle mb-2 text-muted">precio del juego</h6>
    <p class="card-text">{{ $juego->precio}}</p>
    <a href="#" class="card-link">Comprar</a>
    <hr>
    <a href="#" class="card-link">genero</a>
    <p class="card-text">{{ $juego->genero}}</p>
    
  </div>
</div>

</div>


@endsection('contnav')