@extends('layout.app')

@section('titulo','brayan')
@section('contenido')
   

    <form action="/operacionesBasicas" method="POST">
    @csrf
    
    <input type="text" placeholder="Nombre" name="txtNombre"><br>
    <input type="text" placeholder="Apellidos" name="txtApellidos"><br>
    <input type="email" placeholder="Correo" name="txtCorreo"><br>
    <input type="text" placeholder="Contraseña" name="txtContrasena"><br>
    <div class="checkbox">
    <label><input type="radio" name="txtGenero" value="femeale">Femenino</label>
    </div>
    <div class="checkbox">
  <label><input type="radio" name="txtGenero" value="masculine">Masculino</label>
    </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection