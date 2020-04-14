<?php

namespace App\Http\Controllers;

/**
 * 
 */
class DoctorsController extends Controller
{
	
	public function doctors(){
		return view('doctors.index', $this->data);
	}
}


?>