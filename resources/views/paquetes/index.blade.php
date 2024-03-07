@extends('layout')

@section('nombre')
   Paquetes
@endsection

@section('cuerpo')

<table class="table">
<a href="" class="btn btn-primary float-end">Nueva</a>
    <hr><hr>
<a href="" class="btn btn-info float-end">Editar</a>
   <thead>
   <tr>
            <th scope="col">Destinatario</th>
            <th scope="col">N#Vivienda</th>
            <th scope="col">Recibido_por</th>
            <th scope="col">Entregado_a</th>
            <th scope="col">Estado</th>
   </tr>
   </thead>
   @foreach ($paquetes as $paquete)
      <tbody>
         <tr>
            <td>{{$paquete->destinatario}}</td>
            <td>{{$paquete->vivienda_id}}</td>
            <td>{{$paquete->recibido_por}}</td>
            <td>{{$paquete->entregado_a}}</td>
            <td>{{$paquete->estado}}</td>
         </tr>
      </tbody>
   @endforeach
</table>

@endsection