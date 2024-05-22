<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Enlaces a estilos CSS, si los tienes -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Bienvenido a nuestra aplicación de gestión de alumnos</h1>
            <p>Esta es una aplicación para administrar la información de los alumnos.</p>
            <p><a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-lg">Ver Alumnos</a></p>
        </div>
    </div>
    <!-- Enlaces a scripts JS, si los tienes -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

