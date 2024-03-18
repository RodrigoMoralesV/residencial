@extends('layout')

@section('nombre')
Nueva reserva
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('reservas.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="form-floating pl-5" action="{{ url('reservas') }}" method="post">
  @csrf

  <div class="mb-3 col-md-3 pt-4">
    <label for="fecha" class="form-label">Zona común</label>
    <select name="zona_comun_id">
      <option value="">Seleccione una zona comun</option>
      @foreach ($zonas_comunes as $zona_comun)
      <option value="{{ $zona_comun->id }}">{{ $zona_comun->nombre }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="fecha" class="form-label">Fecha</label><br>
    <input type="date" name="fecha_reserva" placeholder="Fecha" required autofocus>
  </div>

  <div class="mb-3 col-md-3">
    <label for="hora" class="form-label">Hora</label><br>
    <input type="time" name="hora_reserva" placeholder="Hora" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="fecha" class="form-label">Nombre del residente</label>
    <select name="residente_id">
      <option value="">Seleccione un residente</option>
      @foreach ($residentes as $residente)
      <option value="{{ $residente->id }}">{{ $residente->nombre }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="estado" class="form-label">Estado</label><br>
    <select class="form-select" id="estado" name="estado" required>
      <option value="">Seleccione el estado</option>
      <option value="1">Activo</option>
      <option value="2">Inactivo</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">
    <a href="{{ route('reservas.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection