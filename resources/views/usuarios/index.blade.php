@extends('layout')

@section('nombre')
Usuarios
@endsection

@section('nuevo')
<!-- <a class="btn btn-primary me-2" href="{{ route('usuarios.create') }}">Nuevo</a> -->
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th></th>
    </tr>
  </thead>
  @foreach ($usuarios as $usuario)
  <tbody>
    <tr>
      <td>{{$usuario->nombre}}</td>
      <td>{{$usuario->email}}</td>
      <td>{{$usuario->estado}}</td>


      <td>
        <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <a class="btn btn-danger" href="{{ route('usuarios.destroy',$usuario->id) }}">
          <i class="fas fa-trash"></i>
        </a>
      </td>

    </tr>
  </tbody>
  @endforeach
</table>

@endsection