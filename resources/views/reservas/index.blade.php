@extends('layout')

@section('nombre')
   Reservas
@endsection

@section('cuerpo')

<table class="table">
   <thead>
   <a href="{{ route('reservas.create') }}" type="button" class="btn btn-primary mb-3">Nuevo</a>
      <tr>
         <th scope="col">Zona comun</th>
         <th scope="col">Fecha reserva</th>
         <th scope="col">Hora reserva</th>
         <th scope="col">Residente</th>
         <th scope="col">Estado</th>
      </tr>
   </thead>
   @foreach ($reservas as $reserva)
      <tbody>
         <tr>
            <td>{{$reserva->zonas_comun->nombre}}</td>
            <td>{{$reserva->fecha_reserva}}</td>
            <td>{{$reserva->hora_reserva}}</td>
            <td>{{$reserva->residente->nombre}}</td>
            <td>{{$reserva->estado}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection
