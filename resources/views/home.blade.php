@extends('layouts.app')

@section('content')


<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">INICIO</a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
              
              <li class="nav-item active">
                <a class="nav-link" href="/juegos">Juegos<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="/provedors">Generos<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="/provedors">Proveedores<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="/contacto">contactos<span class="sr-only">(current)</span></a>
              </li>
          
        </ul>
      </div>
    </nav>


    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="center">BIENVENIDO: {{ Auth::user()->name }}</h1>
                    
                </div> 

                


<section>




<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('imagen/caru1.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagen/caru2.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagen/caru3.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagen/caru4.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
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
</div>


                <hr>
                <h2 class="title">-----------------------------</h2>
                <hr>
                    <div class="card-deck">

                      <div class="card">
                        <img src="{{asset('imagen/gasto.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">------</h5>
                          <p class="card-text">--------------------------------------------------------------------------------</p>
                        </div>
                        <div class="card-footer">
                         <a href="" class="btn btn-primary">Mas....</a>
                        </div>
                      </div>

                      <div class="card">
                        <img src="{{asset('imagen/----.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">------</h5>
                          <p class="card-text">-----------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
                        <div class="card-footer">
                          <a href="" class="btn btn-primary">Mas....</a>
                        </div>
                      </div>

                      <div class="card">
                        <img src="{{asset('imagen/.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">-------</h5>
                          <p class="card-text">dudas y sugerencias.</p>
                        </div>
                        <div class="card-footer">
                          <a href="" class="btn btn-primary">Mas....</a>
                        </div>
                      </div>
                    
                </div><!--//cards-->
                
            </div><!--//container-->
        

        </div>
    </div>
</div>

<div class="card-footer">
    <p class="text-center">Yacuiba - Bolivia</p>
</div>
@endsection

