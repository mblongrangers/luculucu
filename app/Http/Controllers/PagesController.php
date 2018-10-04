<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
	    return view ('welcome');
    }
    public function home()
    {
		$nama = "Gemblong";
	    $tambah = 2+7;
	    return view ('home', compact('nama','tambah'));
    }
    public function contact()
    {
    	$number = '085219101848';
    	$email = '@gmail.com';
    	return view ('contact', compact('number','email'));
    }
    public function profile()
    {
    	$id = '123456';
    	return view ('profile', compact('id')); 
    }
}

