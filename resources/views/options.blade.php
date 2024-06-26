<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones</title>
</head>
<body>
    <h1>Bienvenido, {{ Auth::user()->name }}</h1>
    <div>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Administrar Productos</a>
        <a href="#" class="btn btn-secondary">Otra Opción</a>
    </div>
</body>
</html>
