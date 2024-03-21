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
      <th scope="col">Gestionar</th>
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
      <td>
        <form action="{{ route('viviendas.destroy', $vivienda->id) }}" method="post">
          @csrf
          @method('DELETE')

          @if($vivienda->estado)
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