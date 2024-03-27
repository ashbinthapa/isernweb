<?php

namespace App\Http\Controllers;
use App\Models\ContactForm; // Import the ContactForm model

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
