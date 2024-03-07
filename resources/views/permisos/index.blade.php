@extends('layout')

@section('nombre')
   Permisos
@endsection

@section('cuerpo')

<table class="table">
   <thead>
   <a href="{{ route('permisos.create') }}" type="button" class="btn btn-primary mb-3">Nuevo</a>
   <tr>
            <th scope="col">N#Vivienda</th>
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
         </tr>
      </tbody>
   @endforeach
</table>

@endsection
