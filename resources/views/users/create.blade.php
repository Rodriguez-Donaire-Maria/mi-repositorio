<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Usuario</title>
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
        <h1 class="titulo">Crear Nuevo Usuario</h1>
        <form class="contenido" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </form>
    </div>
@endsection   
</body>
</html>
