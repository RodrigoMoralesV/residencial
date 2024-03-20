@extends('layout')

@section('nombre')
Viviendas
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('viviendas.create') }}">Nueva</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomenclatura</th>
      <th scope="col">Bloque</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  @foreach ($viviendas as $vivienda)
  <tbody>
    <tr>
      <td>{{$vivienda->nomenclatura}}</td>
      <td>{{$vivienda->bloque->nombre}}</td>
      <td>{{$vivienda->telefono}}</td>
      <td>
        @if($vivienda->estado)
        Activa
        @else
        Inactiva
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('viviendas.edit',$vivienda->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td style="vertical-align: middle;">
        <form action="{{ route('viviendas.destroy',$vivienda->id) }}" method="post">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection