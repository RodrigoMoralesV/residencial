@extends('layout')

@section('nombre')
Usuarios
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('usuarios.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Estado</th>
      <th></th>
    </tr>
  </thead>
  @foreach ($usuarios as $usuario)
  <tbody>
    <tr>
      <td>{{$usuario->nombre}}</td>
      <td>{{$usuario->email}}</td>
      <td>{{$usuario->estado}}</td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection