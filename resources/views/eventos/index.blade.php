@extends('layout')

@section('nombre')
Eventos
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('eventos.create') }}">Nuevo</a>
@endsection

@section('cuerpo')
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Editar</th>
      <th scope="col">Gestionar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($eventos as $evento)
    <tr>
      <td>{{ $evento->id }}</td>
      <td>{{ $evento->nombre }}</td>
      <td>{{ $evento->descripcion }}</td>
      <td>{{ $evento->fecha }}</td>
      <td>{{ $evento->hora }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('eventos.edit',$evento->id) }}" class="btn btn-info">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{ route('eventos.destroy', $evento->id) }}" method="post">
          @csrf
          @method('DELETE')

            @if($evento->estado)
              <button class="btn btn-danger"
                  onclick="return confirm('¿Realmente quiere inhabilitar el registro?')">
                  <i class="fas fa-times"></i>
              </button>
            @else
              <button class="btn btn-success"
                  onclick="return confirm('¿Realmente quiere habilitar el registro?')">
                  <i class="fas fa-check"></i>
              </button>
            @endif
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection