<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function cadastrar_prod($value='')
    {
    	return view(view:'produtos/cadProduto');
    }
    public function listar($value='')
    {
    
    }
    public function debug(request $request)
    {
    	var_dump($request -> all());
    }
}
