<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to('danna@email.com')->send(new ContactMail($request->all()));

        //session()->flash('info', 'Mensaje enviado');

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
