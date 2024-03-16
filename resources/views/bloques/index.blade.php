@extends('layout')

@section('nombre')
  Bloques
@endsection

@section('nuevo')
  <a class="btn btn-primary" href="{{ route('bloques.create') }}">Nuevo</a>
@endsection

@section('cuerpo')
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th>Opciones</th>
    </tr>
  </thead>
  @foreach ($bloques as $bloque)
  <tbody>
    <tr>
      <td>{{$bloque->id}}</td>
      <td>{{$bloque->nombre}}</td>
      <td><a class="btn btn-info" href="{{ route('bloques.edit',$bloque->id) }}">Editar</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection