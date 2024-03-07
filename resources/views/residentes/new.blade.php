@extends('layout')

@section('nombre')
    Nuevo residente
@endsection

@section('cuerpo')
    <form class="form-floating" action="{{ url('residentes') }}" method="post">
        @csrf
        <div class="col-md-6 mb-3">
            <input type="text" name="nombre" placeholder="Nombre" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="text" name="movil" placeholder="Teléfono" required>
        </div>

        <div class="col-md-6 mb-3">
            <select name="vivienda_id">
                @foreach ($viviendas as $vivienda)
                    <option value="{{ $vivienda->id }}">{{ $vivienda->nomenclatura }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <select name="propietario">
                <option value="">¿El residente es propietario?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <input type="submit" class="btn btn-success col-md-4" value="Registrar">
        </div>
    </form>

    <div class="col-md-6 mb-3">
        <a href="{{ route('residentes.index') }}" class="btn btn-warning col-md-4">Cancelar</a>
    </div>  
@endsection