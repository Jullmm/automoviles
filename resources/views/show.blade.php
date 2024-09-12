@extends('layouts.app')

@section('content')
    <h1>Detalles del Automóvil</h1>

    <p><strong>Nombre:</strong> {{ $automovil->auto_name }}</p>
    <p><strong>Modelo:</strong> {{ $automovil->auto_modelo }}</p>
    <p><strong>Marca:</strong> {{ $automovil->auto_marca }}</p>
    <p><strong>País:</strong> {{ $automovil->auto_pais }}</p>

    <a href="{{ route('automoviles.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection