<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
	
    public function fact() {
	return view("hola");
}

	public function guardar(){
		return view("resultado");
	}

}
