@extends('layout')

@section('nombre')
Permisos
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('permisos.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">N° Vivienda</th>
      <th scope="col">Nombre visitante</th>
      <th scope="col">Documento visitante</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Gestionar</th>
    </tr>
  </thead>
  @foreach ($permisos as $permiso)
  <tbody>
    <tr>
      <td>{{ $permiso->id }}</td>
      <td>{{ $permiso->vivienda->nomenclatura }}</td>
      <td>{{ $permiso->nombre_visitante }}</td>
      <td>{{ $permiso->documento_visitante }}</td>
      <td>
        @if ($permiso->estado)
          Activo
        @else
          Inactivo
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('permisos.edit',$permiso->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{ route('permisos.destroy', $permiso->id) }}" method="post">
          @csrf
          @method('DELETE')

          @if($permiso->estado)
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