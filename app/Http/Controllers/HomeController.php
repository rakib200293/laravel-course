<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	public function index(){

		$this->data['name'] = "Rakib Islam";
		$this->data['roll'] = 200293;

		return view('home.index', $this->data);
	}

	
}


?>