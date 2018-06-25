<?php
use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarios/getUsuarios','Sos\UsuarioController@index');
Route::get('usuarios/getUsuario/{id}', 'Sos\UsuarioController@getUsuario');
Route::resource('reniec', 'Sos\ReniecController');
Route::resource('usuarios', 'Sos\UsuarioController');