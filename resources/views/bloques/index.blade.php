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
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  @foreach ($bloques as $bloque)
  <tbody>
    <tr>
      <td>{{$bloque->id}}</td>
      <td>{{$bloque->nombre}}</td>
      <td>
        <a class="btn btn-info" href="{{ route('bloques.edit',$bloque->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <a class="btn btn-danger" href="{{ route('bloques.destroy',$bloque->id) }}">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection