@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar Empresa</h2>

<form action="/empresas/{{$empresa->empresa_id}}"  method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="empresa_nombre" name="empresa_nombre" type="text" placeholder="Ingresa un nombre" class="form-control" value="{{$empresa->empresa_nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="empresa_descripcion" name="empresa_descripcion" type="text" placeholder="Ingresa una descripcion" class="form-control"  value="{{$empresa->empresa_descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Logo</label>
        <input id="empresa_logo" name="empresa_logo" type="text" placeholder="Ingresa una ruta del logo" class="form-control"  value="{{$empresa->empresa_logo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Beneficios</label>
        <input id="empresa_beneficios" name="empresa_beneficios" type="text" placeholder="Ingresa los beneficios" class="form-control"  value="{{$empresa->empresa_beneficios}}>
    </div>
    <div>
        <a href="/empresas" class="btn btn-secundary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
    </div>
</form>

@endsection
