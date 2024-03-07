@extends('layout')

@section('nombre')
    Nuevo bloque
@endsection

@section('cuerpo')
    <form action="{{ url('bloques') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
        <select name="estado">
            <option value="">Seleccione el estado</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>
        <input  type="submit" class="form-control mb-2 btn btn-success col-md-4" value="Registrar">
    </form>
@endsection