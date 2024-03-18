@extends('layout')

@section('nombre')
Editar Usuario
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('usuarios.index') }}">Volver</a>
@endsection

@section('cuerpo')

<form action="{{ route('usuarios.update',$usuario->id) }}" method="post" class="mb-4 pl-5">
  @csrf
  @method('PUT')

  <div class="mb-3 col-md-3 pt-4">
    <label for="descripcion" class="form-label">Nombre de Usuario</label>
    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre',$usuario->nombre) }}" class="form-control" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Correo</label>
    <input type="email" name="email" placeholder="Correo" value="{{ old('email',$usuario->email) }}" class="form-control" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Contraseña</label>
    <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Estado</label><br>
    <select name="estado" class="form-select" required>
      <option value="">Seleccione el estado</option>
      <option value="1">Activo</option>
      <option value="2">Inactivo</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Editar">
    <a href="{{ route('usuarios.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection