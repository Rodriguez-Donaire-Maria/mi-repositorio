<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
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
        <h1 class="titulo">Detalles del Usuario</h1>
        <div class="contenido">
        <div class="card-body">       
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <a href="{{ route('users.index') }}" class="btn">Volver</a>
        </div>
    </div>
       
    </div>
@endsection 
</body>
</html>
