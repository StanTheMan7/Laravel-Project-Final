<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 

class MailController extends Controller
{
    public function sendMail(Request $request){
        $contenuEmail = [
            'name'=> $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
    }
    // Pour pouvoire envoiyer les donne
    
    Mail::to($request->user())->send(new MailableClass);
}
