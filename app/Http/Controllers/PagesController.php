<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Feedback;
use Session;

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
    	$number = 85219101848;
    	$email = '@gmail.com';
    	return view ('contact', compact('number','email'));
    }
    public function profile()
    {
    	$id = 123456;
    	return view ('profile', compact('id')); 
    }
    public function blog($title)
    {
    	return view ('blog',compact('title')); 
    }
    public function feedback()
    {
        return view ('feedback'); 
    }
    public function sendfeedback(Request $request)
    {
     // Operasi Simpan
        $contact = new Feedback;
        $contact->title = $request->title;
        $contact->message = $request->message;
        $contact->save();

        Session::flash('status', 'Berhasil mengirim feedback');
        return redirect()->route('home');   
    }
    public function sendContact(Request $request)
    {
        // Operasi Simpan
        $contact = new Contact;
        $contact->title = $request->title;
        $contact->message = $request->message;
        $contact->save();

        Session::flash('status', 'Berhasil mengirim Contact');
        return redirect()->route('home');
    }

}

