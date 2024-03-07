@extends('layout')

@section('nombre')
    Nueva vivienda
@endsection

@section('cuerpo')
    <a href="{{ url('viviendas') }}" class="btn btn-success                                                                                                                                                                                          mb-3 float-end">Volver</a>
    <div class="row">
        <form action="{{ route('viviendas.store') }}" method="post">
            @csrf
            <div class="col-md-6 mb-3">
                <input type="text" name="nomenclatura" class="form-control" placeholder="Nomenclatura" value="{{ old('nombre') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <select name="bloque_id">
                    @foreach($bloques as $bloque)
                        <option value="{{$bloque->id}}">{{$bloque->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <select name="estado">
                    <option value="1">Activa</option>
                    <option value="2">Inactiva</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ old('telefono') }}" required>
            </div>
            <div class="col-md-3">
                <input type="submit" class="mb-2 btn btn-danger col-md-4" value="Registrar">
                <a href="{{url('viviendas')}}" class="mb-2 btn btn-warning col-md-4">Cancelar</a>
            </div>
        </form>
    </div>
@endsection