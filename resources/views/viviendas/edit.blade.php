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

        @error('nomenclatura')
        <div class="error">
          {{ $message }}
        </div>
        @enderror

        <input type="text" name="nomenclatura" class="form-control" placeholder="Nomenclatura" value="{{ old('nomenclatura',$vivienda->nomenclatura) }}" required>
    </div>

    <label for="">Seleccione un bloque</label>
    <div class="mb-3 col-md-3">

        @error('bloque_id')
        <div class="error">
          {{ $message }}
        </div>
        @enderror
  
        <select name="bloque_id" class="form-control">
            <option value="">Seleccione bloque</option>
            @foreach($bloques as $bloque)
            <option value="{{$bloque->id}}">{{$bloque->nombre}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3 col-md-3">
        <label class="form-label">Seleccione estado</label>

        @error('estado')
        <div class="error">
          {{ $message }}
        </div>
        @enderror

        <select name="estado" class="form-control">
            <option value="1">Activa</option>
            <option value="0">Inactiva</option>
        </select>
    </div>

    <div class="mb-3 col-md-3">
        <label for="">Ingrese su telefono</label>

        @error('telefono')
        <div class="error">
          {{ $message }}
        </div>
        @enderror
  
        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ old('telefono',$vivienda->telefono) }}" required>
    </div>

    <div class="col-md-3">
        <input type="submit" class="mb-2 btn btn-success col-md-4" value="Editar">
        <a href="{{ route('viviendas.index')}}" class="mb-2 btn btn-danger col-md-4">Cancelar</a>
    </div>
</form>
@endsection