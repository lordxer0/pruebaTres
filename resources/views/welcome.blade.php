@extends('layout.plantilla')

@section('title','NG bank')

@section('content')  


<center>
    <h1>
        Bienvenido {{$value = session()->pull('key','default')}} <br>
        NG Bank

    </h1>
</center>

<div class="container">
    <div class="content">
        <div class="container">
            <br><br>
            <div class="row align-items-start">
                
                    <div class="col-4 align-self-center">
                        <center>
                            <a href="clientes" class="btn btn-info">Clientes</a>
                        </center>
                    </div>
                    
                    <div class="col-4 align-self-center">
                        <center>
                            <a href="usuarios" class="btn btn-info">Usuarios</a>
                        </center>
                    </div>
                    
                    <div class="col-4 align-self-center">
                        <center>
                            <a href="cuentas" class="btn btn-info">Cuentas</a>
                        </center>
                    </div>
                            
            </div>
            <br><br>
            <div class="row align-items-center">
                    
                <div class="col-4 align-self-center">
                    <center>
                        <a href="consignaciones" class="btn btn-info">Consignaciones</a>
                    </center>
                </div>
                
                <div class="col-4 align-self-center">
                    <center>
                        <a href="retiros" class="btn btn-info">Retiros</a>
                    </center>
                </div>
                
                <!--boton sin funcionamiento aun 
                <div class="col-4 align-self-center">
                    <center>
                    <a href='{{session()->flush()}}' class="btn btn-danger">cerrar</a>
                    </center>
                </div>
                -->
                        
            </div>
                
             
        </div>
        
    </div>

</div>

@endsection
   