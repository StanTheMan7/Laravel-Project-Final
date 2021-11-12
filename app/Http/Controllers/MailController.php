<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = Mail::all()->sortBy('read');
        
        return view('pages.mailBox', compact('mail'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    
    
    public function store(Request $request){
        request()->validate([
            'name'=>['required'],
            'email'=>['required'],
            'subject'=>['required'],
        ]);
        $mail = new Mail();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->read = 0;
        $mail->save();
        // $details = [
        //     'name'=> $request->name,
        //     'email'=> $request->email,
        //     'subject'=> $request->subject
        // ];
        FacadesMail::to('sts.graur@gmail.com')->send(new Email($mail));
        return redirect()->back()->with('message', 'Succesfully Created');
        }
        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        $mail->read = 1;
        $mail->save();
        return view('backoffice.mail.showEmail',compact('mail'));
    }

    // public function showbetter(Mail $mail)
    // {

    //     return view('email',compact('mail'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();
        return redirect()->back()->with('message', 'Succesfully Deleted');;
    }
}
