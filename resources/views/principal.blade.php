@extends('layouts.master')

@section('contenido')
    <div class="list-group my-2">
        <a class="list-group-item list-group-item-action" href="{{ route('usuarios') }}">Obtener <strong>todos los usuarios</strong></a>
        <a class="list-group-item list-group-item-action" href="{{ route('usuarios') }}">Obtener todos los usuarios <strong>Mujeres</strong></a>
        <a class="list-group-item list-group-item-action" href="{{ route('usuarios') }}">Obtener todos los usuarios <strong>Hombres</strong></a>
        <a class="list-group-item list-group-item-action" href="{{ route('usuarios') }}">Obtener <strong>un único usuario</strong></a>
    </div>
@endsection