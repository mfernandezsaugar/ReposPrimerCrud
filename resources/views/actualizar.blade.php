@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar usuario</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Primer apellido</label>
                <input type="text" name="apellido1" class="form-control" required value="{{$personas->apellido1}}">
                <label for="">Segundo apellido</label>
                <input type="text" name="apellido2" class="form-control" required value="{{$personas->apellido2}}">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fecha_nacimiento"
                class="form-control" required value="{{$personas->fecha_nacimiento}}">
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info">Atras</a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>
            </form>
        </p>
    </div>
  </div>
@endsection