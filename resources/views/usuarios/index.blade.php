@extends('layout')

@section('nombre')
Usuarios
@endsection

@section('nuevo')
<a class="btn btn-primary me-2 float-right" href="{{ route('usuarios.create') }}">Nuevo</a>
@endsection

@section('cuerpo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Foto de Perfil</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th></th>
    </tr>
  </thead>
  @foreach ($usuarios as $usuario)
  <tbody>
    <tr>
      <td style="vertical-align: middle;">{{$usuario->id}}</td>
      <td style="vertical-align: middle;">{{$usuario->nombre}}</td>
      <td style="vertical-align: middle;">{{$usuario->email}}</td>
      <td>
        @if ($usuario->foto == null)
          <img src="{{ url('dist/img/null.jpg') }}" class="img-thumbnail elevation-2" style="max-width: 100px; height: auto;" alt="User Image">
        @else
          <img src="{{ url('dist/img/',$usuario->foto) }}" class="img-thumbnail elevation-2" style="max-width: 100px; height: auto;" alt="User Image">
        @endif
      </td>
      <td style="vertical-align: middle;"> 
        @if ($usuario->estado)
          Activo
        @else
          Inactivo
        @endif
      </td>
      <td style="vertical-align: middle;">
        <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td style="vertical-align: middle;">
        <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="post">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger" onclick="return confirm('¿Realmente quiere eliminar el registro?')">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection