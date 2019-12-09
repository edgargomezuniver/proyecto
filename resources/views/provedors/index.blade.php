<h1>GAMER ZONE</h1>

@extends('plantilla')

@section('contnav')

<h1 class="text-center">provedores</h1>


<div class="container">
  
   <a class="btn btn-info mb-2" href="{{ route('provedors.create') }}">Agregar proveedor</a>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">nombre</th>
        <th scope="col">telefono</th>
        <th scope="col">Mas</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>

      @foreach($provedors as $provedor)

       <tr>
        
        <td> {{ $provedor->nombre }} </td>
        <td> {{ $provedor->telefono }} </td>

        <td><a href="/provedors/{{$provedor->id}}" class="btn btn-primary" >ver mas..</a></td>
        <td><a class="btn btn-info mb-2" href="{{ route('provedors.edit',$provedor->id) }}">editar</a>

      <form action="{{ route('provedors.destroy',$provedor->id) }}" method="POST">
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