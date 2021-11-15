<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Role;
use App\Models\Title;
use App\Models\Tweet;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        $contact = Contact::all();
        $header = Header::all();
        $client = Client::all();
        $titleDesc = Title::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet = Tweet::all();
        return view('pages.contact', compact( 'contact', 'header', 'client', 'titleDesc', 'newsletter','footer', 'tweet'));
    }
    public function index(){
        $this->authorize('manager');
        $contact = Contact::all();
        return view('backoffice.contact.all', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $this->authorize('manager');
        return view('backoffice.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->authorize('manager');
        return view('backoffice.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            'title'=>['required'],
            'placeholdername'=>['required'],
            'placeholderemail'=>['required'],
            'placeholdersubject'=>['required']
        ]);
        $contact->title = $request->title;
        $contact->placeholdername = $request->placeholdername;
        $contact->placeholderemail= $request->placeholderemail;
        $contact->placeholdersubject = $request->placeholdersubject;
        $contact->save();
        return redirect()->route('contact.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
