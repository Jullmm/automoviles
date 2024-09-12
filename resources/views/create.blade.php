@extends('layouts.app')

@section('content')
    <h1>Crear un nuevo Automóvil</h1>

    <form action="{{ route('automoviles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="auto_name">Nombre</label>
            <input type="text" name="auto_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_modelo">Modelo</label>
            <input type="text" name="auto_modelo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_marca">Marca</label>
            <input type="text" name="auto_marca" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="auto_pais">País</label>
            <input type="text" name="auto_pais" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Automóvil</button>
    </form>
@endsection