@extends('layout')

@section('nombre')
   Eventos
@endsection

@section('cuerpo')

<table class="table">
<a href="" class="btn btn-primary float-end">Nueva</a>
    <hr><hr>
    <a href="" class="btn btn-info float-end">Editar</a>
   <thead>
      <tr>
         <th scope="col">Nombre</th>
         <th scope="col">Descripcion</th>
         <th scope="col">Fecha</th>
         <th scope="col">Hora</th>
         <th scope="col">Estado</th>
      </tr>
   </thead>
   @foreach ($eventos as $evento)
      <tbody>
         <tr>
            <td>{{$evento->nombre}}</td>
            <td>{{$evento->descripcion}}</td>
            <td>{{$evento->fecha}}</td>
            <td>{{$evento->hora}}</td>
            <td>{{$evento->estado}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection