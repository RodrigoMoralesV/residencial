@extends('layout')

@section('nombre')
Paquetes
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('paquetes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Destinatario</th>
      <th scope="col">N° Vivienda</th>
      <th scope="col">Recibido por</th>
      <th scope="col">Entregado a</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Gestionar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($paquetes as $paquete)
    <tr>
      <td>{{ $paquete->id }}</td>
      <td>{{ $paquete->destinatario }}</td>
      <td>{{ $paquete->vivienda->nomenclatura }}</td>
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
        <form action="{{ route('paquetes.destroy', $paquete->id) }}" method="post">
          @csrf
          @method('DELETE')

          @if($paquete->estado)
            <button class="btn btn-danger"
              onclick="return confirm('¿Realmente quiere inhabilitar el registro?')">
              <i class="fas fa-times"></i>
            </button>
          @else
            <button class="btn btn-success"
              onclick="return confirm('¿Realmente quiere habilitar el registro?')">
              <i class="fas fa-check"></i>
            </button>
          @endif
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection