@extends('layout')

@section('nombre')
Nuevo paquete
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('paquetes.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4 pl-5" action="{{ url('paquetes') }}" method="post">
  @csrf

  <div class="mb-3 col-md-3 pt-4">
    <label for="destinario" class="form-label">Nombre del destinario</label>
    <input type="text" name="destinatario" placeholder="Destinatario" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="vivienda" class="form-label">Vivienda del destinario</label>
    <select name="vivienda_id">
      <option value="">Seleccione una opcion...</option>
      @foreach ($paquetes as $paquete)
      <option value="{{ $paquete->id }}">{{ $paquete->nomenclatura }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="recibido" class="form-label">Recibido por</label>
    <input type="text" name="recibido_por" placeholder="Recibido por: " required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="entregado" class="form-label">Entregado a</label>
    <input type="text" name="entregado_a" placeholder="Entregado a: " required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="entregado" class="form-label">Estado</label><br>
    <select name="estado">
      <option value="">Seleccione el estado</option>
      <option value="1">Entregado</option>
      <option value="2">Sin entregar</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">  
    <a href="{{ route('paquetes.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection