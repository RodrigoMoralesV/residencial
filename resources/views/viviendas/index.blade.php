@extends('layout')

@section('nombre')
    Viviendas
@endsection

@section('cuerpo')

<table class="table">
    <a href="viviendas/create" class="btn btn-success float-end">Nueva</a>
    <hr><hr>
    <a href="viviendas/edit" class="btn btn-info float-end">Editar</a>
    <hr><hr>
    <a href="" class="btn btn-danger float-end">Eliminar</a>
    <thead>
        <tr>
            <th scope="col">Nomenclatura</th>
            <th scope="col">Bloque</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Estado</th>
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
        </tr>
    </tbody>
    @endforeach
</table>

@endsection