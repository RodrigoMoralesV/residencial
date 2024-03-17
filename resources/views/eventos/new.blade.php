@extends('layout')

@section('nombre')
Nuevo evento
@endsection

@section('nuevo')
  <a class="btn btn-secondary" href="{{ route('eventos.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4" action="{{ url('eventos') }}" method="post">
    @csrf
    <div class="mb-3 col-md-3 pt-4">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del evento" value="{{ old('nombre') }}" required>
    </div>

    <div class="mb-3 col-md-3 pt-4">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del evento" value="{{ old('descripcion') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label for="hora" class="form-label">Hora</label>
        <input type="time" class="form-control" id="hora" name="hora" value="{{ old('hora') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-select" id="estado" name="estado" required>
            <option value="">Seleccione el estado</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>
    </div>

    <div class="mb-3 col-md-3">
        <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        <a href="{{ route('eventos.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection