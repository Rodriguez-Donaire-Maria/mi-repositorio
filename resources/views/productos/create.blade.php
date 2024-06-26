<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
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
    <h1 class="titulo">Crear Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="contenido" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="image">Imagen:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</div>
@endsection

</body>
</html>
