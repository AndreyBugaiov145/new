<?php

namespace App\Http\Controllers;
use App\produkt;

use Illuminate\Http\Request;

class productController extends Controller
{
      public function open()
	   {
	   	//return "string";
	   	
	   	$contact = new produkt();
	   	return view('home', ['a'=> $contact->find(2)]);
	   }
	}
