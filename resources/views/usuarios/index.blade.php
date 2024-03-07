@extends('layout')

@section('nombre')
    Usuarios
@endsection

@section('cuerpo')

<table class="table">
   <a href="" class="btn btn-primary float-end">Nueva</a>
    <hr><hr>
    <a href="" class="btn btn-info float-end">Editar</a>
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