@extends('layouts.plantillabase')

@section('contenido')

<h2>Crear Empresa</h2>

<form action="/empresas"  method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="empresa_nombre" name="empresa_nombre" type="text" placeholder="Ingresa un nombre" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="empresa_descripcion" name="empresa_descripcion" type="text" placeholder="Ingresa una descripcion" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Logo</label>
        <input id="empresa_logo" name="empresa_logo" type="text" placeholder="Ingresa una ruta del logo" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Beneficios</label>
        <input id="empresa_beneficios" name="empresa_beneficios" type="text" placeholder="Ingresa los beneficios" class="form-control" tabindex="4">
    </div>
    <div>
        <a href="/empresas" class="btn btn-secundary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
    </div>
</form>

@endsection
