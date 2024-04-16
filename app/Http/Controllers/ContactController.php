<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactForm; // Import the ContactForm model


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
        ]);

        /*this block of code can be replaced by */
        /*$contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        */    
        /*replaced by this */
        // Save contact form data to database
        ContactForm::create($request->all());

        // Send email
        Mail::to('info.isernepal@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
