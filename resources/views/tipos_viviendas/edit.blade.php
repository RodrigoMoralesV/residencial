@extends('layout')

@section('nombre')
Editar vivienda
@endsection

@section('nuevo')
<a class="btn btn-secondary me-2 float-right" href="{{ route('tipos_viviendas.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4 pl-5" action="{{ route('tipos_viviendas.update',$tipos_vivienda->id) }}" method="post">
  @csrf
  @method('PUT')
  
  <div class="mb-3 col-md-3 pt-4">
    <label for="evento" class="form-label">Nombre de la Vivienda</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la vivienda" value="{{ old('nombre',$tipos_vivienda->nombre) }}" autofocus required>
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
    <input type="submit" class="btn btn-success col-md-5" value="Editar">
    <a href="{{ route('tipos_viviendas.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection