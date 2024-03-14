@extends('layout')

@section('nombre')
   Bloques
@endsection

@section('cuerpo')

<div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary me-2" href="{{ route('bloques.create') }}">Nuevo</a>
        
    </div>
<table class="table">
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