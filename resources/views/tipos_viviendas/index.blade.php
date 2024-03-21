@extends('layout')

@section('nombre')
Tipos de viviendas
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('tipos_viviendas.create') }}">Nueva</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Gestionar</th>
    </tr>
  </thead>
  @foreach ($tipos_vivienda as $tipo_vivienda)
  <tbody>
    <tr>
      <td>{{ $tipo_vivienda->id }}</td>
      <td>{{ $tipo_vivienda->nombre }}</td>
      <td>
        @if ($tipo_vivienda->estado)
          Activa
        @else 
          Inactiva
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('tipos_viviendas.edit',$tipo_vivienda->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{ route('tipos_viviendas.destroy', $tipo_vivienda->id) }}" method="post">
          @csrf
          @method('DELETE')

          @if($tipo_vivienda->estado)
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
  </tbody>
  @endforeach
</table>

@endsection