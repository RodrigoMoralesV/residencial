
@extends('layout')


@section('nombre')
   Eventos
@endsection


@section('cuerpo')

    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary me-2" href="{{ route('eventos.create') }}" >Nuevo</a> 
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->descripcion }}</td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->hora }}</td>
                    <td>{{ $evento->estado }}</td>
                    <td><a class="btn btn-info" href="{{ route('eventos.edit',$evento->id) }}" class="btn btn-info">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
