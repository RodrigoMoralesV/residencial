@extends('layout')

@section('nombre')
   Reservas
@endsection

@section('cuerpo')

<a href="{{ route('reservas.index') }}" type="button" class="btn btn-primary mb-3">Regresar</a>

<form class="form-floating" method="POST">

  <input type="" class="form-control" id="floatingInputValue" value="">
  <label for="floatingInputValue">GG</label>

</form>

@endsection
