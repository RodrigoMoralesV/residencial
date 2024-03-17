@extends('layout')

@section('nombre')
Tipos_viviendas
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('tipos_viviendas.create') }}">Nueva</a>
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
  @foreach ($tipos_vivienda as $tipo_vivienda)
  <tbody>
    <tr>
      <td>{{$tipo_vivienda->nombre}}</td>
      <td>{{$tipo_vivienda->estado}}</td>
    </tr>
    <!-- <td>
        <a class="btn btn-info" href="{{ route('Tipos_vivienda.edit',$tipos_vivienda->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <a class="btn btn-danger" href="{{ route('Tipos_vivienda.destroy',$tipos_vivienda->id) }}">
          <i class="fas fa-trash"></i>
        </a>
      </td> -->
  </tbody>
  @endforeach
</table>

@endsection