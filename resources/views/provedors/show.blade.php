<h1>ficha de proveedor</h1>

@extends('plantilla')

@section('contnav')

<h1 class="text-center">{{$provedor->nombre}}</h1>

<div class="container">
  
  <div class="card" style="width: 18rem;">
    <div class="card-body">

        <h5 class="card-title">{{$provedor->nombre}}</h5>
        <hr>
        <h6 class="card-subtitle mb-2 text-muted">telefono de contacto</h6>
        <p class="card-text">{{ $provedor->telefono}}</p>
        <hr>
        <h6 class="card-subtitle mb-2 text-muted">direccion del contacto</h6>
        <p class="card-text">{{ $provedor->direccion}}</p>
        <a href="#" class="card-link">contactar</a>
        <hr>
        <h6 class="card-subtitle mb-2 text-muted">email</h6>
        <p class="card-text">{{ $provedor->email}}</p>

        
    </div>
</div>

</div>

  

@endsection('contnav')