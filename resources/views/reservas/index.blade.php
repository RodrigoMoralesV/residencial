@extends('layout')

@section('nombre')
Reservas
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('reservas.create') }}">Nueva</a>
@endsection

@section('cuerpo')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Zona comun</th>
      <th scope="col">Fecha reserva</th>
      <th scope="col">Hora reserva</th>
      <th scope="col">Residente</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  @foreach ($reservas as $reserva)
  <tbody>
    <tr>
      <td>{{ $reserva->id }}</td>
      <td>{{ $reserva->zonas_comun->nombre }}</td>
      <td>{{ $reserva->fecha_reserva }}</td>
      <td>{{ $reserva->hora_reserva }}</td>
      <td>{{ $reserva->residente->nombre }}</td>
      <td>
        @if ($reserva->estado)
          Activa
        @else
          Inactiva
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('reservas.edit',$reserva->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{route('reservas.destroy',$reserva->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection