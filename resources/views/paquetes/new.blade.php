@extends('layout')

@section('nombre')
    Nuevo paquete
@endsection

@section('cuerpo')
    <form class="form-floating" action="{{ url('paquetes') }}" method="post">
        @csrf
        <div class="col-md-6 mb-3">
            <input type="text" name="destinatario" placeholder="Destinatario" autofocus required>
        </div>

        <div class="col-md-6 mb-3">
            <select name="vivienda_id">

            </select>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="recibido_por" placeholder="Recibido por: " value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="entregado_a" placeholder="Entregado a: " value="{{ old('nombre') }}" required>
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
        <a href="{{ route('paquetes.index') }}" class="btn btn-warning col-md-4">Cancelar</a>
    </div>  
@endsection