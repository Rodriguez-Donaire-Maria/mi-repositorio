<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <style>
        .titulo{
          color: #65051b;
          font-family: serif;
        }
        .contenido{
           background-color: #9D7980; 
           padding: 30px;
           border-radius: 15px;
           color: white;
        }
        a.btn {
            background-color: #65051b;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 5px;
            margin: 2px;
        }
        a.btn:hover, a.btn:focus {
            background-color: #D28B00;
            color: white;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $producto->nombre }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
                    <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
                    @if($producto->image)
                        <div class="image">
                            <img src="{{ asset('storage/images/' . $producto->image) }}" alt="{{ $producto->nombre }}" style="width: 500px; height: 500px;">
                        </div>
                    @else
                        <p><strong>Imagen:</strong> No hay imagen disponible</p>
                    @endif
                </div>
            </div>
            <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning mt-3">Editar</a>
        </div>
    </div>
</div>
@endsection

</body>
</html>

