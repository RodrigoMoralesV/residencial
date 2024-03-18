@extends('layout')

@section('nombre')
Residentes
@endsection

@section('nuevo')
<a class="btn btn-primary float-right" href="{{ route('residentes.create') }}">Nuevo</a>
@endsection

@section('cuerpo')
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Movil</th>
      <th scope="col">Bloque</th>
      <th scope="col">Nomenclatura</th>
      <th scope="col">Propietario</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  @foreach ($residentes as $residente)
  <tbody>
    <tr>
      <td>{{ $residente->id }}</td>
      <td>{{ $residente->nombre }}</td>
      <td>{{ $residente->movil }}</td>
      <td>{{ $residente->vivienda->bloque->nombre }}</td>
      <td>{{ $residente->vivienda->nomenclatura }}</td>
      <td>
        @if($residente->propietario)
        Si
        @else
        No
        @endif
      </td>
      <td>
        <a class="btn btn-info" href="{{ route('residentes.edit',$residente->id) }}">
          <i class="fas fa-edit"></i>
        </a>
      </td>
      <td>
        <form action="{{route('residentes.destroy',$residente->id)}}" method="post">
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