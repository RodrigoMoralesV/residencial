@extends('layout')

@section('nombre')
    Residentes
@endsection

@section('cuerpo')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Movil</th>
            <th scope="col">Bloque</th>
            <th scope="col">Nomenclatura</th>
            <th scope="col">Propietario</th>
        </tr>
    </thead>
    @foreach ($residentes as $residente)
    <tbody>
        <tr>
            <td>{{$residente->nombre}}</td>
            <td>{{$residente->movil}}</td>
            <td>{{$residente->vivienda->bloque->nombre}}</td>
            <td>{{$residente->vivienda->nomenclatura}}</td>
            <td>
                @if($residente->propietario)
                    Si
                @else
                    No
                @endif
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

@endsection