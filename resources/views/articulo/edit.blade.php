@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <div>
        <form action="/articulos/{{ $articulo->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="codigo" class="form-label">C&oacute;digo</label>
                <input id="codigo" name="codigo" type="text" value="{{ $articulo->codigo }}" class="form-control" tabindex="1" autofocus>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripci&oacute;n</label>
                <input id="descripcion" name="descripcion" type="text" value="{{ $articulo->descripcion }}" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input id="cantidad" name="cantidad" type="number" value="{{ $articulo->cantidad }}" class="form-control" tabindex="3">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input id="precio" name="precio" type="number" step="any" value="{{ $articulo->precio }}" class="form-control" tabindex="4">
            </div>
            <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
