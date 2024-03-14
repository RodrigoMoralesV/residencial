@extends('layout')

@section('nombre')
    Viviendas
@endsection

@section('cuerpo')

<table class="table">
    <a href="viviendas/create" class="btn btn-success float-end">Nueva</a>
    <hr><hr>
    <thead>
        <tr>
            <th scope="col">Nomenclatura</th>
            <th scope="col">Bloque</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    @foreach ($viviendas as $vivienda)
    <tbody>
        <tr>
            <td>{{$vivienda->nomenclatura}}</td>
            <td>{{$vivienda->bloque->nombre}}</td>
            <td>{{$vivienda->telefono}}</td>
            <td>
                @if($vivienda->estado)
                    Activa
                @else
                    Inactiva
                @endif
            </td>
            <td><a class="btn btn-info" href="{{ route('viviendas.edit',$vivienda->id) }}">Editar</a><a class="btn btn-danger" href="{{ route('viviendas.destroy',$vivienda->id) }}">Eliminar</a></td>
        </tr>
    </tbody>
    @endforeach
</table>

@endsection