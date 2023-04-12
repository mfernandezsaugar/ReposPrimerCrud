@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar usuario</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Estas seguro?

                <table class="table table-sm table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Fecha nacimiento</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $personas->nombre }}</td>
                                <td>{{ $personas->apellido1 }}</td>
                                <td>{{ $personas->apellido2 }}</td>
                                <td>{{ $personas->fecha_nacimiento }}</td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("personas.index") }}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar
                    </button>
                </form>
              </div>
        </p>
    </div>
  </div>
@endsection