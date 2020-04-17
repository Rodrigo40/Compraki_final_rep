<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('site.home');
})->name('plat.home');


//Route::get('login',);

// Route::get('list-user','userController@listar_usuario', function(){
// 	return view('listagemUsuarios');
// });


// Route::get('/produtos/novo',function () {
//     return view('site.produtos.novo_p');
// })->name('plat.prod.cad');

 


Route::get('/compraki/sobre',function () {
    return view('site.sobre');
})->name('plat.sobre');
