<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Title;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        $classe = Classe::all();
        $header = Header::all();
        $client = Client::all();
        $titleDesc = Title::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet = Tweet::all();
        $pricing  = Pricing::all();
        return view('pages.classes' , compact('classe', 'header', 'client', 'titleDesc', 'footer', 'tweet', 'pricing','newsletter'));
    }
     
    public function index(){
        $classe = Classe::all();
        return view('backoffice.classe.all',compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.classe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'url'=>['required'],
            'title'=>['required'],
            'name'=>['required'],
            'time'=>['required'],
        ]);
        $classe = new Classe();
        $classe->url = $request->file('url')->hashName();
        $request->file('url')->storePublicly('img', 'public');
        $classe->title = $request->title;
        $classe->name = $request->name;
        $classe->time = $request->time;
        $classe->save();
        return redirect()->route('classe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        return view('backoffice.classe.show', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        return view('backoffice.classe.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        request()->validate([
            'title'=>['required'],
            'name'=>['required'],
            'time'=>['required'],
        ]);
        if($request->file('url') !== null) {
            Storage::disk('public')->delete('img/' . $classe->url);
            $classe->url = $request->file('url')->hashName();
            $request->file('url')->storePublicly('img', 'public');
        }
        $classe->title = $request->title;
        $classe->name = $request->name;
        $classe->time = $request->time;
        $classe->save();
        return redirect()->route('classe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        Storage::disk('public')->delete('img/' . $classe->url);
        $classe->delete();
        return redirect()->route('classe.index');
    }
}
