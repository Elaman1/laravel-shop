<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
 
class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
    	$contact = new Contact();
    	$contact->name = $req->input('name');
    	$contact->email = $req->input('email');

    	$contact->save();

    	return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData() {
    	return view('messages', ['data' => Contact::all()]);
    }

    public function showOneMessage($id) {
    	$contact = new Contact;
    	return view('one-messages', ['data' => $contact->find($id) ]);
    }

    public function updateMessage($id) {
    	$contact = new Contact;
    	return view('update-message', ['data' => $contact->find($id) ]);
    }

    public function deleteMessage($id) {
    	Contact::find($id)->delete();
    	return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }

    public function updateMessageSubmit($id, ContactRequest $req) {
    	$contact = Contact::find($id);
    	$contact->name = $req->input('name');
    	$contact->email = $req->input('email');

    	$contact->save();

    	return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было изменено');
    }




    public function submit2( ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('CONTACT_NAME');
        $contact->tel = $req->input('CONTACT_PHONE');
        $contact->email = $req->input('CONTACT_EMAIL');

        return redirect()->route('contact-data-one', $id)->with('success', 'Ваши данные были отправлены');
    }

    public function newContact( ContactRequest $req) {
        $contact = new Contact();
        return view('new-contact', ['data' => $contact->find($id) ]);
    }

}
