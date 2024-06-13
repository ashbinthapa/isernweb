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
            'message' => 'nullable',
        ]);

        // Sanitize input
        $sanitizedData = $request->only(['name', 'email', 'message']);
        $sanitizedData['name'] = htmlspecialchars($sanitizedData['name'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['email'] = htmlspecialchars($sanitizedData['email'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['message'] = htmlspecialchars($sanitizedData['message'], ENT_QUOTES, 'UTF-8');

        // Save contact form data to database
        ContactForm::create($sanitizedData);

        try {
            // Send email
            Mail::to('info.isernepal@gmail.com')->send(new ContactFormMail($sanitizedData));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was an issue sending your message. Please try again later.');
        }

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
