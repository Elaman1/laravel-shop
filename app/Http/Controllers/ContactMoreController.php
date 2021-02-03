<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMoreRequest;
use App\ContactMore;
use App\Contact;

class ContactMoreController extends Controller
{
    public function submit(ContactMoreRequest $req ) {

    	$contactMore = new ContactMore();
    	$contact = new Contact();
    	$contactMore->id_user = $contact->find($id);
    	
    	$contactMore->marriage = $req->input('marriage');
    	$contactMore->gendor = $req->input('gendor');

    	$contactMore->save();

    	return redirect()->route('home')->with('success', 'Данные было добавлено');
    }

    public function addAttr($id) {
    	$contact = new Contact;
    	return view('contact-add-attr', ['data' => $contact->find($id) ]);
    }


}
