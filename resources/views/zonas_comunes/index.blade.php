@extends('layout')

@section('nombre')
Zonas Comunes
@endsection

@section('nuevo')
<a class="btn btn-primary float-right" href="{{ route('zonas_comunes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Gestionar</th>
    </tr>
  </thead>
  @foreach ($zonas_comunes as $zona_comun)
  <tbody>
    <tr>
      <td>{{ $zona_comun->id }}</td>
      <td>{{$zona_comun->nombre}}</td>
      <td>
        @if($zona_comun->estado)
          Disponible
        @else
          Fuera de Servicio
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('zonas_comunes.edit',$zona_comun->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{ route('zonas_comunes.destroy',$zona_comun->id) }}" method="post">
          @csrf
          @method('DELETE')

          @if($zona_comun->estado)
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