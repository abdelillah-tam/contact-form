<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function send(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required']
        ]);

        Mail::to('atamossat@gmail.com')->send(new Contact(
            $validation['name'],
            $validation['email'],
            $validation['message']
        ));

        return redirect()->route('home')->with('status', 'Done');
    }
}
