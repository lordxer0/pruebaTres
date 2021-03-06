<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::resource('clientes','ClientesController');

    Route::resource('consignaciones','ConsignacionesController');

    
    Route::resource('retiros','RetirosController');
    
    Route::resource('tipo_documentos','TipoDocumentosController');
    
    Route::resource('tipo_usuarios','TipoUsuariosController');
    
    Route::resource('usuarios','UsuariosController');
    
    Route::resource('cuentas','CuentasController');

    
    Route::middleware('RouteProtect')->group(function(){
        

    });
    
    
    Route::get('/', function () {
        
        return view('login');
        
    });
    
    Route::middleware('LoginCheck')->group(function(){
        
        Route::get('home', function () {
            return view('welcome');
        });
        

    });


