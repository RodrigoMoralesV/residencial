@extends('layout')

@section('nombre')
Nuevo residente
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('residentes.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="form-floating pl-5" action="{{ route('residentes.update',$residentes->id) }}" method="post">
  @csrf
  @method('PUT')

  <div class="mb-3 col-md-3 pt-4">
    <label for="nombre" class="form-label">Nombre del residente</label>
    <input type="text" name="nombre" value="{{ old('nombre',$residentes->nombre) }}" placeholder="Nombre" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="movil" value="{{ old('movil',$residentes->movil) }}" placeholder="Teléfono" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="vivienda_id" class="form-label">Vivienda</label><br>
    <select name="vivienda_id">
      <option value="">Seleccione una casa...</option>
      @foreach ($viviendas as $vivienda)
      <option value="{{ $vivienda->id }}">{{ $vivienda->nomenclatura }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="propietario" class="form-label">¿El residente es propietario?</label><br>
    <select name="propietario">
      <option value="">¿El residente es propietario?</option>
      <option value="1">Si</option>
      <option value="2">No</option>
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
    <input type="submit" class="btn btn-success col-md-5" value="Editar">
    <a href="{{ route('residentes.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection