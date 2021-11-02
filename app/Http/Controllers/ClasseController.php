<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Tag;
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
        $tags = Tag::all();
        $classe_tag = ClasseTag::all();
        $categories = Category::all();
        return view('backoffice.classe.all',compact('classe','tags','classe_tag', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = Classe::all();
        $tags = Tag::all();
        $classe_tag = ClasseTag::all();
        $categories = Category::all();
        return view('backoffice.classe.create',compact('classe', 'tags','classe_tag','categories'));
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

        $tab = [];

        foreach ($request->tag_id as $tag) {
            array_push($tab, intval($tag));
        }
        $classe = new Classe();
        $classe->url = $request->file('url')->hashName();
        $request->file('url')->storePublicly('img/class/', 'public');
        $classe->title = $request->title;
        $classe->name = $request->name;
        $classe->time = $request->time;
        $classe->category_id = $request->category_id[0];
        $classe->save();
        foreach ($tab as $idTag) {
            $classe_tag = new ClasseTag();
            $classe_tag->classe_id = $classe->id;
            $classe_tag->tag_id = $idTag;
            $classe_tag->save();
        }

        return redirect()->route('classe.index')->with('message', 'Succesfully Created');
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
            'category_id'=>['required']
        ]);
        if($request->file('url') !== null) {
            Storage::disk('public')->delete('img/class' . $classe->url);
            $classe->url = $request->file('url')->hashName();
            $request->file('url')->storePublicly('img/class', 'public');
        }
        $classe->title = $request->title;
        $classe->name = $request->name;
        $classe->time = $request->time;
        $classe->save();
        return redirect()->route('classe.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        Storage::disk('public')->delete('img/class' . $classe->url);
        $classe->delete();
        return redirect()->route('classe.index')->with('message', 'Succesfully Deleted');
    }
}
