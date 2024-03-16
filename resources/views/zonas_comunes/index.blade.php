@extends('layout')

@section('nombre')
Zonas Comunes
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('zonas_comunes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
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