<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
   	public function listar_usuario()
   	{
		$user= new User();
		$user->name= 'Gelson Camilo';
		$user->email='geduson@gmail.com';
		$user->password="123";
		$user->save();

		dd($user);
   	}




}
