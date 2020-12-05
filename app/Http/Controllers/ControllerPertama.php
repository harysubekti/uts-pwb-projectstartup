<?php

namespace App\Http\Controllers;

class ControllerPertama extends Controller{

	public function first(){
		return view('startup');
	}
	public function second(){
	return view('penggerak');
	}
	public function third(){
	return view('edukasi');
	}
	public function about(){
	return view('about');
	}
}

?>