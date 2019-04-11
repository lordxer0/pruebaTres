@extends('layout.plantilla')

@section('title','NG bank')

@section('content')  

    
<center>
    <h1>
        Bienvenido a NG Bank
    </h1>
    <br><br><br>

    <form >
      <input type="text" id="login" class="fadeIn second" name="usu_cedula" placeholder="numero documento"><br>
      <input type="text" id="login" class="fadeIn second" name="usu_login" placeholder="usuario"><br>
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="clave"><br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>


</center>




@endsection
   