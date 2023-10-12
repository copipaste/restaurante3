@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Información de la promocion</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $promocion->nombre }}</p>
            <p><strong>Descripcion:</strong>{{$promocion->descripcion}}</p>
            <p><strong>Porcentaje de descuento:</strong>{{$promocion->procentajeDescuento}}</p>
        </div>
    </div>

    <div class="form-group mt-2">
        <a href="{{ route('promocion.edit', $promocion) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('promocion.index') }}" class="btn btn-danger">Cancelar</a>
    </div>

@stop 