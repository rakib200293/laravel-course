<?php

namespace App\Http\Controllers;

/**
 * 
 */
class ServicesController extends Controller
{
	
	public function services(){
		return view('services.index', $this->data);
	}
}


?>