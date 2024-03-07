@extends('layout')

@section('nombre')
   Tipos_viviendas
@endsection

@section('cuerpo')

<table class="table">
<a href="" class="btn btn-primary float-end">Nueva</a>
    <hr><hr>
    <a href="" class="btn btn-info float-end">Editar</a>
   <thead>
   <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
   </tr>
   </thead>
   @foreach ($tipos_viviendas as $tipo_vivienda)
      <tbody>
         <tr>
            <td>{{$tipo_vivienda->nombre}}</td>
            <td>{{$tipo_vivienda->estado}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection
