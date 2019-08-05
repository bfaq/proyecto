@extends('layout.app')

@section('contenido')

@foreach($personas as $persona)
<div class="card" style="width: 18rem;">
  <img src="img/usuario.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$persona->nombre}}</h5>
    <p class="card-text">Documento:{{$persona->correoElectronico}}</p>
    <a href="#" class="btn btn-primary">Click me!</a>
  </div>
</div>
@endforeach

@endsection