@extends('layouts.app')

@section('content')
    <h1>Editar Automóvil</h1>

    <form action="{{ route('automoviles.update', $automovil->auto_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="auto_name">Nombre</label>
            <input type="text" name="auto_name" value="{{ $automovil->auto_name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_modelo">Modelo</label>
            <input type="text" name="auto_modelo" value="{{ $automovil->auto_modelo }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_marca">Marca</label>
            <input type="text" name="auto_marca" value="{{ $automovil->auto_marca }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_pais">País</label>
            <input type="text" name="auto_pais" value="{{ $automovil->auto_pais }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Automóvil</button>
    </form>
@endsection