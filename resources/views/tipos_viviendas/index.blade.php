@extends('layout')

@section('nombre')
   Tipos_viviendas
@endsection

@section('cuerpo')

<table class="table">
<a href="" class="btn btn-primary float-end">Nueva</a>
    
   <thead>
   <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
   </tr>
   </thead>
   @foreach ($tipos_viviendas as $tipo_vivienda)
      <tbody>
         <tr>
            <td>{{$tipo_vivienda->nombre}}</td>
            <td>{{$tipo_vivienda->estado}}</td>
         </tr>
         <td><a class="btn btn-info" href="{{ route('tipos_viviendas.edit',$tipo_vivienda->id) }}">Editar</a>
      </tbody>
   @endforeach
</table>

@endsection
