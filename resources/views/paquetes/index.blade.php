@extends('layout')

@section('nombre')
   Paquetes
@endsection

@section('cuerpo')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('paquetes.create') }}" class="btn btn-primary me-2">Nuevo</a>
</div>

<hr>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Destinatario</th>
            <th scope="col">N° Vivienda</th>
            <th scope="col">Recibido por</th>
            <th scope="col">Entregado a</th>
            <th scope="col">Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paquetes as $paquete)
            <tr>
                <td>{{ $paquete->destinatario }}</td>
                <td>{{ $paquete->vivienda_id }}</td>
                <td>{{ $paquete->recibido_por }}</td>
                <td>{{ $paquete->entregado_a }}</td>
                <td>{{ $paquete->estado }}</td>
                <td><a href="{{ route('paquetes.edit',$paquete->id) }}" class="btn btn-info">Editar</a></td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
