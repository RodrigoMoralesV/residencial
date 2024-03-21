@extends('layout')

@section('nombre')
Editar paquete
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('paquetes.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form class="mb-4 pl-5" action="{{ route('paquetes.update',$paquete->id) }}" method="post">
  @csrf
  @method('PUT')

  <div class="mb-3 col-md-3 pt-4">
    <label for="destinario" class="form-label">Nombre del destinario</label><br>

    @error('destinatario')
      <div class="error">
        {{ $message }}
      </div>    
    @enderror

    <input type="text" name="destinatario" class="form-control" placeholder="Destinatario" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="vivienda" class="form-label">Vivienda del destinario</label>
    <select name="vivienda_id" class="form-control">
      <option value="">Seleccione una opcion...</option>
      @foreach ($viviendas as $vivienda)
      <option value="{{ $vivienda->id }}">{{ $vivienda->nomenclatura }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <label for="recibido" class="form-label">Recibido por</label><br>

    @error('recibido_por')
      <div class="error">
        {{ $message }}
      </div>    
    @enderror

    <input type="text" name="recibido_por" class="form-control" placeholder="Recibido por: " required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="entregado" class="form-label">Entregado a</label><br>
    
    @error('entregado_a')
      <div class="error">
        {{ $message }}
      </div>    
    @enderror

    <input type="text" name="entregado_a" class="form-control" placeholder="Entregado a: " required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="entregado" class="form-label">Estado</label><br>
    <select name="estado" class="form-control">
      <option value="">Seleccione el estado</option>
      <option value="1">Entregado</option>
      <option value="0">Sin entregar</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">  
    <a href="{{ route('paquetes.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection