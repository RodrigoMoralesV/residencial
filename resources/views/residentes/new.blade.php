@extends('layout')

@section('nombre')
Nuevo residente
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('residentes.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="form-floating pl-5" action="{{ url('residentes') }}" method="post">
  @csrf

  <div class="mb-3 col-md-3 pt-4">
    <label for="nombre" class="form-label">Nombre del residente</label>

    @error('nombre')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="text" class="form-control" name="nombre" placeholder="Nombre" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="telefono" class="form-label">Teléfono</label>

    @error('movil')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
      
    <input type="text" class="form-control" name="movil" placeholder="Teléfono" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="vivienda_id" class="form-label">Vivienda</label><br>

    @error('vivienda_id')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
      
    <select name="vivienda_id" class="form-control">
      <option value="">Seleccione una casa...</option>
      @foreach ($viviendas as $vivienda)
      <option value="{{ $vivienda->id }}">{{ $vivienda->nomenclatura }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="propietario" class="form-label">¿El residente es propietario?</label><br>

    @error('propietario')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
      
    <select name="propietario" class="form-control">
      <option value="">¿El residente es propietario?</option>
      <option value="1">Si</option>
      <option value="0">No</option>
    </select>
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
    <a href="{{ route('residentes.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection