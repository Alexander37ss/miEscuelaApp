@extends('master')

@section('contenido')
<style>
    .tamano-carousel{
    width: 700px;
    height: 400px;
}
    .trazo-textogrande{
        -webkit-text-stroke-width: .5px;
        -webkit-text-stroke-color: black;
    }
    .trazo-texto{
        -webkit-text-stroke-width: .2px;
        -webkit-text-stroke-color: black;
    }
</style>
<div class="jumbotron">
    <h1 class="display-4">Mi Escuelita App</h1>
    <p class="lead">Bienvenido a mi escuelita.edu!</p>
    <hr class="my-4">
    <p>
        En esta escuela aprenderas a leer, escribir y dibujar.
    </p>
    <div class="tamano-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/Escuelita.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="trazo-textogrande">Aprende a Escribir</h5>
    <p class="trazo-texto">Garantizamos que tu hijo aprenda a escribir y leer en menos de un año</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/Escuelita2.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="trazo-textogrande">Descubre</h5>
    <p class="trazo-texto">Actividades recreativas para niños de todas las edades</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/Escuelita3.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="trazo-textogrande">Diviertete</h5>
    <p class="trazo-texto">Horas de diversion con tus amigos</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  </div>
</div>

      
@stop