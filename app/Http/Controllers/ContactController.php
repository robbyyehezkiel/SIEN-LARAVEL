<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show() 
    {
        return view('dashboard.contacts.show', [
            'active' => 'contacts',
            'title' => 'Contacts'
        ]);
    }

    public function submit(ContactRequest $request) 
    {
        Mail::to('pemerintah@instansi.com')->send(new ContactMail($request->name, $request->email, $request->content));

        return back()->with('message_sent', 'Your message has been sent !');
    }
}
