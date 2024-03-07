@extends('layout')

@section('nombre')
   Bloques
@endsection

@section('cuerpo')

<a class="btn btn-primary float-end" href="{{ route('bloques.create') }}">Nuevo</a>
    <hr><hr>
    <a href="" class="btn btn-info float-end">Editar</a>
<table class="table">
   <thead>
      <tr>
         <th scope="col">ID</th>
         <th scope="col">Nombre</th>
      </tr>
   </thead>
   @foreach ($bloques as $bloque)
      <tbody>
         <tr>
            <td>{{$bloque->id}}</td>
            <td>{{$bloque->nombre}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection