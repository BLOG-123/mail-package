<?php

namespace package\contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Package\Contact\Models\Contact;
use Package\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to('shraif18@gmail.com')->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}

