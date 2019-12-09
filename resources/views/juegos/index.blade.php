<h1>GAMER ZONE</h1>


@extends('plantilla')

@section('contnav')

<p></p>
<h1 class="text-center">juegos</h1>


<div class="container">
  
   <a class="btn btn-info mb-2" href="{{ route('juegos.create') }}">Agregar juego</a>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Titulo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Mas</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>

      @foreach($juegos as $juego)

       <tr>
        
        <td> {{ $juego->titulo }} </td>
        <td> {{ $juego->descripcion }} </td>
        <td><a href="/juegos/{{$juego->id}}" class="btn btn-primary" >ver mas..</a></td>
        <td>
          <a class="btn btn-info mb-2" href="{{ route('juegos.edit',$juego->id) }}">
          editar
        </a>
        <form action="{{ route('juegos.destroy',$juego->id) }}" method="POST">
            @csrf
            @method('DELETE')

          <button type="submit" class="btn-sm btn-danger" onclick="return confirm ('esta seguro de borrar?')">borrar</button>
      </form>
      </tr>


      @endforeach

    </tbody>
  </table>

 

</div>

  

@endsection('contnav')