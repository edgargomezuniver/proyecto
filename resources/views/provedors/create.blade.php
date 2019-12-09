<h1>GAMER ZONE</h1>

@extends('plantilla')

@section('contnav')


<div class="container">
  
   <h1>Agregar proveedor </h1>

    <form action="{{ route ('provedors.store') }}" method="POST"><!-- la ruta del formulario!-->
        
        @csrf 

            <div class="col-md-12">
                <div class="form-group">
                    <strong>nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre del proveedor">
                </div>
            </div>

           <div class="col-md-12">
                <div class="form-group">
                    <strong>telefono:</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="telefono del proveedor">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>direccion:</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="direccion del proveedor">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="mail del proveedor">
                </div>
            </div>
         

            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>

</div>

  

@endsection('contnav')