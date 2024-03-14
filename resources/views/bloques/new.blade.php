@extends('layout')


@section('nombre')
    Nuevo bloque
@endsection


@section('cuerpo')
    <form action="{{ url('bloques') }}" method="post" class="mb-4">
        @csrf

        <div class="mb-3">
            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <select name="estado" class="form-select" required>
                <option value="">Seleccione el estado</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>

        <div>
            <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        </div>
    </form>
@endsection
