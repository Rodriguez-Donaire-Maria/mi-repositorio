
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido al Panel de Control</title>
    <style>
      .container{
        background-image: url('assets/image.png');
        color: white;
       font-family: serif;
      }
      .titulo{
        margin-left: 100px;
      }
      .c{
        display: flex;
        align-items: flex-end;
        align-items: center;
      }
      .content{
        background-color: #D9D9D9;
        width: 500px;
        height: 500px;
        border-radius: 30px;
        margin-left: 90px ;
        margin-right: 120px;
      }
      .content1{
        background-color: #D9D9D9;
        width: 500px;
        height: 500px;
        border-radius: 30px;
      }
      .fondo{
        background-color: #9D7980;
        width: 400px;
        height: 400px;
        border-radius: 30px;
        margin-top: 52px;
        margin-left: 52px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      
      }
      a{
        max-width: 80%;
        height: auto;
      }
   .user{
    max-width: 80%; 
    height: auto;
   }
    </style> 
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titulo">
    <h1>Desayunos Maria Elena</h1>
    <p>INICIO.</p>
  </div>

    <div class="c">
        <div class="content">
            <div class="fondo">
            <a href="{{ route('productos.index') }}" class="btnProductos"><img src="assets/sales.png" ></a> 
            <h3>Administrar Productos</h3>
            </div>
        </div>
        <div class="content1">
            <div class="fondo">
            <a class="user"  href="{{ route('users.index') }}" class="btnUsuario"><img src="assets/users.png" ></a>  
            <h3>Administrar Usuarios</h3>     
            </div>
        </div>
    </div>
</div>
@endsection   
</body>
</html>