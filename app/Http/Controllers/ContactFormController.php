<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store()
    {
        $contact_form_data = request()->all();
        Mail::to('')->send(new ContactFormMail($contact_form_data));
        
        return redirect()->route('home','/#contact')->with('success','Your message has been submitted successfully');
    }
}
