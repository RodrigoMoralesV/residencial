@extends('layout')

@section('nombre')
   
@endsection

@section('cuerpo')

<table class="table">
   <thead>
   <a href="{{ route('zonas_comunes.create') }}" type="button" class="btn btn-primary mb-3">Nuevo</a>
      <tr>
         <th scope="col">Nombre</th>
         <th scope="col">Estado</th>
      </tr>
   </thead>
   @foreach ($zonas_comunes as $zona_comun)
      <tbody>
         <tr>
            <td>{{$zona_comun->nombre}}</td>
            <td>{{$zona_comun->estado}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection