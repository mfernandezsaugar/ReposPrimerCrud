@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo usuario</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Primer apellido</label>
                <input type="text" name="apellido1" class="form-control" required>
                <label for="">Segundo apellido</label>
                <input type="text" name="apellido2" class="form-control" required>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info">Atras</a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus "></span>Agregar
                </button>
            </form>
        </p>
    </div>
  </div>
@endsection