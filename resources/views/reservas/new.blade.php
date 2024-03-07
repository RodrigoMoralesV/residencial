@extends('layout')

@section('nombre')
    Nuevo paquete
@endsection

@section('cuerpo')
    <form class="form-floating" action="{{ url('reservas') }}" method="post">
        @csrf

        <div class="col-md-6 mb-3">
            <select name="#">
            <option value="">Seleccione una zona comun</option>
                @foreach ($zonas_comunes as $zona_comun)
                    <option value="{{ $zona_comun->id }}">{{ $zona_comun->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="nombre_visitante" placeholder="Nombre visitante" required autofocus>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="documento_visitante" placeholder="Documento" value="{{ old('nombre') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        </div>
    </form>
    <div class="col-md-6 mb-3">
        <a href="{{ route('permisos.index') }}" class="btn btn-warning col-md-4">Cancelar</a>
    </div>  
@endsection