<?php

namespace App\Http\Controllers;

use App\Mail\EmailNews;
use App\Models\Newsletter;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $newsletter = Newsletter::all();
        return view('backoffice.newsletter.all', compact('newsletter'));
    }
    public function sendNews(Request $request)
    {
        $contentMail = [
            'email'=> $request->email
        ];
    Mail::to($contentMail['email'])->send(new EmailNews($contentMail));
        return redirect()->back();
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
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        $this->authorize('manager');
        return view('backoffice.newsletter.show', compact('newsletter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        $this->authorize('manager');
        return view('backoffice.newsletter.edit', compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        request()->validate([
            'title'=>['required'],
            'button'=>['required']
        ]);
        $newsletter->title = $request->title;
        $newsletter->button = $request->button;
        $newsletter->save();
        return redirect()->route('newsletter.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('newsletter.index')->with('message', 'Succesfully Deleted');
    }
}
