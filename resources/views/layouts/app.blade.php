<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Automóviles</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container">
        @yield('content') 
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
