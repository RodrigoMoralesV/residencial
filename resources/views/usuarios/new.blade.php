@extends('layout')

@section('nombre')
Nuevo Usuario
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('usuarios.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form action="{{ url('usuarios') }}" method="post" class="mb-4 pl-5" enctype="multipart/form-data">
  @csrf

  <div class="mb-3 col-md-3 pt-4">
    <label for="descripcion" class="form-label">Nombre de Usuario</label>

    @error('nombre')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="text" name="nombre" placeholder="Nombre" class="form-control" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Correo</label>

    @error('email')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
  
    <input type="email" name="email" placeholder="Correo" class="form-control" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Contraseña</label>

    @error('password')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
  
    <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="Foto" class="form-label">Foto de Perfil</label>

    @error('foto')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="file" class="form-control" placeholder="Foto de perfil" name="foto" accept="image/*">
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Estado</label><br>

    @error('estado')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
  
    <select name="estado" class="form-control" required>
      <option value="">Seleccione el estado</option>
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
    </select>
  </div>

  <div class="mb-3 col-md-3">
    <input type="submit" class="btn btn-success col-md-5" value="Registrar">
    <a href="{{ route('usuarios.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection