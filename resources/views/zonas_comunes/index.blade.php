@extends('layout')

@section('nombre')
Zonas Comunes
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('zonas_comunes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  @foreach ($zonas_comunes as $zona_comun)
  <tbody>
    <tr>
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
        <a class="btn btn-danger" href="{{ route('zonas_comunes.destroy',$zona_comun->id) }}">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection