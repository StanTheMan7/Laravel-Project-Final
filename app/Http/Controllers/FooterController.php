<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $tweet = Tweet::all();
        $footer = Footer::all();
        return view('backoffice.footer.all', compact('footer','tweet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        $this->authorize('manager');
        $tweet = Tweet::all();
        return view('backoffice.footer.show', compact('footer','tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        $this->authorize('manager');
        $tweet = Tweet::all();
        return view('backoffice.footer.edit', compact('footer','tweet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        request()->validate([
            'text'=>['required'],
            'icon1'=>['required'],
            'icon2'=>['required'],
            'icon3'=>['required'],
            'email'=>['required'],
            'phone'=>['required'],
            'address'=>['required'],
            'copyright'=>['required']
        ]);
        $footer->text = $request->text;
        $footer->icon1 = $request->icon1;
        $footer->icon2 = $request->icon2;
        $footer->icon3 = $request->icon3;
        $footer->email = $request->email;
        $footer->phone = $request->phone;
        $footer->address = $request->address;
        $footer->copyright = $request->copyright;
        $footer->save();
        return redirect()->route('footer.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footer.index')->with('message', 'Succesfully Deleted');
    }
}
