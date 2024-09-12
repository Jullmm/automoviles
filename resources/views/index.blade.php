@extends('layouts.app')

@section('content')
    <h1>Lista de Automóviles</h1>
    <a href="{{ route('automoviles.create') }}" class="btn btn-primary">Crear nuevo automóvil</a>

    @if($automoviles->isEmpty())
        <p>No hay automóviles registrados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>País</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($automoviles as $automovil)
                    <tr>
                        <td>{{ $automovil->auto_id }}</td>
                        <td>{{ $automovil->auto_name }}</td>
                        <td>{{ $automovil->auto_modelo }}</td>
                        <td>{{ $automovil->auto_marca }}</td>
                        <td>{{ $automovil->auto_pais }}</td>
                        <td>
                            <a href="{{ route('automoviles.show', $automovil->auto_id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('automoviles.edit', $automovil->auto_id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('automoviles.destroy', $automovil->auto_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection