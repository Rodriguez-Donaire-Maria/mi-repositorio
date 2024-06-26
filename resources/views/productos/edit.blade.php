<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
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
        .btn, .btn a, button.btn {
            background-color: #65051b;
            color: white;
            padding: 5px ;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border-radius: 5px;
        }
        .btn:hover, .btn:focus, .btn a:hover, .btn a:focus, button.btn:hover, button.btn:focus {
            background-color: #D28B00;
            color: white;
        }
        form button.btn {
            background-color: #65051b;
            color: white;
            padding: 5px ;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin-top: 15px;
            border-radius: 5px;
        }
        form button.btn:hover, form button.btn:focus {
            background-color: #D28B00;
            color: white;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="titulo">Editar Producto</h1>
    <form class="contenido" action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" name="image" class="form-control">
            @if($producto->image)
                <img src="{{ asset('storage/images/' . $producto->image) }}" alt="{{ $producto->nombre }}" style="width: 100px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection


</body>
</html>
