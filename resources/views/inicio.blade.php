@extends('layout/plantilla')

@section('tituloPagina', 'Crud Laravel 8')

@section('contenido')
<div class="card">
    <h5 class="card-header">CRUD</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-20">

          @if ($mensaje= Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $mensaje }}
          </div>
          @endif

        </div>
      </div>
      <h4 class="card-title text-center">Listado de personas en el sistema</h4>
      <p>
        <a href="{{ route("personas.create") }}" class="btn btn-primary">
          <span class="fas fa-user-plus"></span> Agregar usuario
        </a>
      </p>
      <hr>
      <p class="card-text">
        <table>
            <div class="table table-responsive ">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Fecha nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->apellido1 }}</td>
                                <td>{{ $item->apellido2 }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                   <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                      <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                      </button>
                                  </form>
                                </td>
                                <td>
                                  <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                      <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </table>
      </p>
    </div>
  </div>
    </div>
@endsection