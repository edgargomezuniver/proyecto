<h1>GAMER ZONE</h1>

@extends('plantilla')

@section('contnav')

<div class="container">
    <h1 class="text-center">editar videojuego</h1>
    <hr>
    <form action="{{ route('juegos.update', $juego->id) }}" method="POST">

        @csrf         <!-- toquen que utiliza laravel para proteccion de los datos a ingresar!-->
        @method('PUT')<!-- metodo que permite updatear!-->

                    <div class="col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="titulo" class="form-control" placeholder="Titulo del juego">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea class="form-control" name="descripcion" placeholder="Reseña"></textarea>
                </div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">genero</label>
              <select name="genero" class="form-control" >
                <option>Aventura</option>
                <option>Disparos</option>
                <option>Estrategia</option>
                <option>Lucha</option>
                <option>Survival horror</option>
                <option>Rol</option>
                <option>Musicales</option>
                <option>Party games</option>
                <option>Simulación</option>
                <option>Deportivo</option>
                <option>Carreras</option>
                <option>Plataformas</option>
              </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>precio:</strong>
                    <input type="text" name="precio" class="form-control" placeholder="precio del juego">
                </div>
            </div>

            

            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
  

@endsection('contnav')