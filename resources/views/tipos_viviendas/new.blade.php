@extends('layout')

@section('nombre')
Nueva vivienda
@endsection

@section('nuevo')
<a class="btn btn-secondary me-2 float-right" href="{{ route('tipos_viviendas.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4 pl-5" action="{{ url('tipos_viviendas') }}" method="post">
  @csrf
  
  <div class="mb-3 col-md-3 pt-4">
    <label for="evento" class="form-label">Tipo Vivienda</label>

    @error('nombre')
      <div class="error">
        {{ $message }}
      </div>
    @enderror

    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tipo de vivienda" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="estado" class="form-label">Estado</label><br>

    @error('estado')
      <div class="error">
        {{ $message }}
      </div>
    @enderror

    <select class="form-control" id="estado" name="estado" required>
      <option value="">Seleccione el estado</option>
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">
    <a href="{{ route('tipos_viviendas.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection