@extends('layout')

@section('nombre')
Nuevo bloque
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('bloques.index') }}">Volver</a>
@endsection

@section('cuerpo')

<form action="{{ url('bloques') }}" method="post" class="mb-4">
    @csrf

    <div class="mb-3 col-md-3 pt-4">
        <input type="text" name="nombre" placeholder="Nombre" class="form-control" autofocus required>
    </div>

    <div class="mb-3 col-md-3">
        <select name="estado" class="form-select" required>
            <option value="">Seleccione el estado</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>
    </div>

    <div class="mb-3 col-md-3">
        <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        <a href="{{ route('bloques.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
    </div>
</form>
@endsection