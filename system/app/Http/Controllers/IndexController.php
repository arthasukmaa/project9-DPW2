<?php 

namespace App\Http\Controllers;


class indexController extends Controller{
	
	function showcomputer(){
	
	    return view('computer');
	}

	function showcontact(){

		return view('contact');

	}

	function showlaptop(){

		return view('laptop');

	}

	function showproduct(){

		return view('product');

	}

	function showabout(){

		return view('about');

	}

	function showkeranjang(){

		return view('keranjang');

	}

function showcheckout(){

		return view('about');

	}
}