@extends('layout')

@section('nombre')
Permisos
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('permisos.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">N° Vivienda</th>
      <th scope="col">Nombre visitante</th>
      <th scope="col">Documento visitante</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  @foreach ($permisos as $permiso)
  <tbody>
    <tr>
      <td>{{$permiso->vivienda_id}}</td>
      <td>{{$permiso->nombre_visitante}}</td>
      <td>{{$permiso->documento_visitante}}</td>
      <td>{{$permiso->estado}}</td>
      <td><a href=""></a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection