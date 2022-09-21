@extends('layouts.master')

{{-- {{dd($usuario)}} --}}
@php
    $i = 1
@endphp
{{dd($usuario)}}
{{-- @section('contenido')
    @if (sizeof($usuario) > 0)
        <table class="table table-striped table-hover ">
            <thead class="thead-inverse">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Nacionalidad (Abreviado)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuario as $datos)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$datos->name->first." ".$datos->name->last}}</td>
                        <td>{{$datos->location->country.", ".$datos->location->state.", ".$datos->location->city}}</td>
                        <td>{{$datos->cell}}</td>
                        <td>{{$datos->email}}</td>
                        <td>{{$datos->nat}}</td>
                    </tr>
                    @php
                        $i++
                    @endphp
                @endforeach
            </tbody>
        </table>
        {{$usuario->links()}}
    @else
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Ups</strong> No hay Usuarios en este momento
        </div>
    @endif
@endsection --}}