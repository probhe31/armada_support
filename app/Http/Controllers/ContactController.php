<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function store(ContactFormRequest $request)
    {

    	$validated = $request->validated();

    	if($validated){

    		$contact = [];

		    $contact['name'] = $request->get('name');	   
		    $contact['email'] = $request->get('email');
		    $contact['msg'] = $request->get('msg');

		    

		    $email = "soporte.pisco.armada@gmail.com";
		    Mail::to($email)->send(new ContactEmail($contact));

		    return back();

    	}

    }
}
