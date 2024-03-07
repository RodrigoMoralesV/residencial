@extends('layout')

@section('nombre')
    Nuevo evento
@endsection

@section('cuerpo')
    <form class="form-floating" action="{{ url('eventos') }}" method="post">
        @csrf
        <div class="col-md-6 mb-3">
            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="descripcion" placeholder="Descripcion" value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="date" name="fecha" placeholder="Fecha" value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="time" name="hora" placeholder="Hora" value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <select name="estado">
                <option value="">Seleccione el estado</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        </div>
    </form>
    <div class="col-md-6 mb-3">
        <a href="{{ route('bloques.index') }}" class="btn btn-warning col-md-4">Cancelar</a>
    </div>  
@endsection