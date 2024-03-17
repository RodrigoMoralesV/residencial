@extends('layout')

@section('nombre')
Paquetes
@endsection

@section('nuevo')
<a class="btn btn-primary me-2" href="{{ route('paquetes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">Destinatario</th>
      <th scope="col">N° Vivienda</th>
      <th scope="col">Recibido por</th>
      <th scope="col">Entregado a</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($paquetes as $paquete)
    <tr>
      <td>{{ $paquete->destinatario }}</td>
      <td>{{ $paquete->vivienda_id }}</td>
      <td>{{ $paquete->recibido_por }}</td>
      <td>{{ $paquete->entregado_a }}</td>
      <td>
        @if($paquete->estado)
          Entregado
        @else
          Sin entregar
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('paquetes.edit',$paquete->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <a class="btn btn-danger" href="{{ route('paquetes.destroy',$paquete->id) }}">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection