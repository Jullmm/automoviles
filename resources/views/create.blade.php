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
            <select name="auto_pais" id="auto_pais" class="form-control">
                <option value="">Selecciona un país</option>
                @foreach($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar Automóvil</button>
    </form>
@endsection