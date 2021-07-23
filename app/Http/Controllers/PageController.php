<?php

namespace App\Http\Controllers;

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

        //visulizzazione della  mail
        //return (new ContactFormMail($validated))->render();

        Mail::to('admin@admin.com')->send(new ContactFormMail($validated));
        return redirect()->back()->with('message', 'Messaggio Mandato con successo!');

    }
}