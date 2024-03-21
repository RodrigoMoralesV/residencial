@extends('layout')

@section('nombre')
Editar Usuario
@endsection

@section('nuevo')
<a class="btn btn-secondary float-right" href="{{ route('usuarios.index') }}">Volver</a>
@endsection

@section('cuerpo')
<form action="{{ route('usuarios.update',$usuario->id) }}" method="post" class="mb-4 pl-5" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3 col-md-3 pt-4">
    <label for="descripcion" class="form-label">Nombre de Usuario</label>

    @error('nombre')
    <div class="error">
      {{ $message }}
    </div>
    @enderror

    <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre',$usuario->nombre) }}" autofocus required>
  </div>

  <div class="mb-3 col-md-3">
    <label for="descripcion" class="form-label">Correo</label>

    @error('email')
    <div class="error">
      {{ $message }}
    </div>
    @enderror
  
    <input type="email" name="email" placeholder="Correo" class="form-control" value="{{ old('email',$usuario->email) }}" required>
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

    <input type="file" class="form-control" placeholder="Foto de perfil" name="foto" value="{{ old('foto',$usuario->foto) }}" accept="image/*">
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
    <input type="submit" class="btn btn-success col-md-5" value="Editar">
    <a href="{{ route('usuarios.index') }}" class="btn btn-danger col-md-5">Cancelar</a>
  </div>
</form>
@endsection