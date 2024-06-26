<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Usuarios</title>
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
            border: 2px solid #65051b;
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
        <div class="texto">
         <h1>Usuarios</h1>
         <h2>Lista de Usuarios</h2>   
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn">Ver</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
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
