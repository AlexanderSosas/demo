@extends('layouts.plantillabase')

@section('contenido')
<h2>Vista Empresa</h2>

<a href="empresas\create" class="btn btn-primary">Crear empresa</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCIÓ</th>
            <th scope="col">LOGO</th>
            <th scope="col">BENIFICIOS</th>
            <th scope="col">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $empresa)
        <tr>
            <td>{{ $empresa->empresa_id }}</td>
            <td>{{ $empresa->empresa_nombre }}</td>
            <td>{{ $empresa->empresa_descripcion }}</td>
            <td>{{ $empresa->empresa_logo }}</td>
            <td>{{ $empresa->empresa_beneficios }}</td>

            <td>
                <form action="{{ route ('empresas.destroy', $empresa->empresa_id) }}" method="POST">
                <a href="/empresas/{{ $empresa->empresa_id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
