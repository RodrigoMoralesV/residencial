@extends('layout')

@section('nombre')
    Nuevo evento
@endsection

@section('cuerpo')
    <form class="form-floating" action="{{ url('eventos') }}" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del evento" value="{{ old('nombre') }}" required>
            </div>

            <div class="col-md-6 mb-3">
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

            <div class="col-12">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{ route('eventos.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
    