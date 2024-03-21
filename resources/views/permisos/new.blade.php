@extends('layout')

@section('nombre')
Nuevo permiso
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('permisos.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4 pl-5" action="{{ url('permisos') }}" method="post">
  @csrf

  <div class="col-md-3 mb-3 pt-4">
    <label for="casa" class="form-label">Casa que visitara</label><br>
    <select name="vivienda_id" class="form-control">
      <option value="">Seleccione una casa.......</option>
      @foreach ($permisos as $permiso)
      <option value="{{ $permiso->id }}">{{ $permiso->nomenclatura }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-3 mb-3">
    <label for="visitante" class="form-label">Nombre del visitante</label>

    @error('nombre_visitante')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="text" name="nombre_visitante" class="form-control" placeholder="Nombre visitante" required autofocus>
  </div>

  <div class="col-md-3 mb-3">
    <label for="documento" class="form-label">Documento del visitante</label>

    @error('documento_visitante')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="text" class="form-control" name="documento_visitante" placeholder="Documento" required>
  </div>

  <div class="col-md-3 mb-3">
    <label for="estado" class="form-label">Estado</label><br>
    <select name="estado" class="form-control">
      <option value="">Seleccione un estado.....</option>
      <option value="1">Activo</option>
      <option value="0  ">Inactivo</option>
    </select>
  </div>

  <div class="col-md-3 mb-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">
    <a href="{{ route('permisos.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection