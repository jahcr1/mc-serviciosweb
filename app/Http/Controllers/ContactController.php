<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form() {
        return view('contact');
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Ejemplo de envío de correo
        Mail::raw($request->message, function ($msg) use ($request) {
            $msg->to('contacto@tusitio.com')
                ->subject('Nuevo mensaje de ' . $request->name)
                ->replyTo($request->email);
        });

        return back()->with('success', 'Mensaje enviado correctamente.');
    }
}
