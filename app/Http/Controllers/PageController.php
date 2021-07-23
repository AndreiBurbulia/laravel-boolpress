<?php

namespace App\Http\Controllers;
use App\Email;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    function index()
    {
        return view('guest.welcome');
    }

    function about()
    {

        return view('guest.about');
    }

    function sendContactForm(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);

        Email::create($validated);

        Mail::to('admin@admin.com')->send(new ContactFormMail($validated));
        return redirect()->back()->with('message', 'Messaggio Mandato con successo!');

    }
}