<?php

namespace App\Http\Controllers;


 /**
  * 
  */
 class AboutController extends Controller {
 	
 	public function about(){

 		return view('about.index', $this->data);
 	}
 
 }

?>
