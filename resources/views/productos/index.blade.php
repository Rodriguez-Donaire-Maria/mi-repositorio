<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Productos</title>
    <style>
        .container {
            font-family: serif;
            text-align: center;
        }
        .encabezado {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .texto {
            flex: 1;
            text-align: left;
            color: #65051b;
        }
        .CrearProducto {
            flex: 1;
            text-align: right;
        }
        .btnCrear {
            background-color: #65051b;
            padding: 10px;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            text-decoration: none;
        }
        .btnCrear:hover, .btnCrear:focus {
            background-color: #D28B00;
            color: white;
        }
        .table {
            border: 3px solid #65051b;
            width: 100%;
            border-collapse: collapse;
        }
        .table thead tr {
            background-color: #65051b;
            color: white;
        }
        .table thead th {
            padding: 5px;
            text-align: center;
        }
        .table tbody td {
            padding: 10px;
            border-top: 1px solid #65051b;
        }
        .btn, .btn a, button.btn {
            background-color: #65051b;
            color: white;
            padding: 5px ;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
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
            margin: 2px;
            border-radius: 5px;
        }
        form button.btn:hover, form button.btn:focus {
            background-color: #D28B00;
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
    <div class="encabezado">
        <div class="texto">
            <h1>Productos</h1>
            <h2>Lista de Productos</h2>
        </div>
        <div class="CrearProducto">
            <a href="{{ route('productos.create') }}" class="btnCrear">Crear Producto</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>  
    </div>

    <table class="table">
        <thead >
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        @if($producto->image)
                            <img src="{{ asset('storage/images/' . $producto->image) }}" alt="{{ $producto->nombre }}" style="width: 150px; height: 150px;">
                        @else
                            No hay imagen
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>
