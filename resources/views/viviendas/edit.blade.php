@extends('layout')

@section('nombre')
Editar Vivienda
@endsection

@section('nuevo')
<a class="btn btn-secondary me-2 float-right" href="{{ route('viviendas.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb- pl-5" action="{{ route('viviendas.update',$vivienda->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3 col-md-3 pt-4">
        <label for="descripcion" class="form-label">Nomenclatura</label>
        <input type="text" name="nomenclatura" class="form-control" placeholder="Nomenclatura" value="{{ old('nomenclatura',$vivienda->nomenclatura) }}" required>
    </div>

    <label for="">Seleccione un bloque</label>
    <div class="mb-3 col-md-3">
        <select name="bloque_id">
            <option value="">Seleccione bloque</option>
            @foreach($bloques as $bloque)
            <option value="{{$bloque->id}}">{{$bloque->nombre}}</option>
            @endforeach
        </select>
    </div>
    
    <label class="form-label">Seleccione estado</label>
    <div class="mb-3 col-md-3">
        <select name="estado">
            <option value="1">Activa</option>
            <option value="2">Inactiva</option>
        </select>
    </div>

    <div class="mb-3 col-md-3">
        <label for="">Ingrese su telefono</label>
        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ old('telefono',$vivienda->telefono) }}" required>
    </div>

    <div class="col-md-3">
        <input type="submit" class="mb-2 btn btn-success col-md-4" value="Editar">
        <a href="{{url('viviendas.index')}}" class="mb-2 btn btn-danger col-md-4">Cancelar</a>
    </div>
</form>
@endsection