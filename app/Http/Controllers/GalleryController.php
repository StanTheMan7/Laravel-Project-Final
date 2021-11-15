<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Title;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        $header = Header::all();
        $gallery = Gallery::paginate(9);
        $client = Client::all();
        $titleDesc =  Title::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet = Tweet::all();
        return view('pages.gallery', compact('header', 'gallery', 'client', 'titleDesc', 'newsletter','footer', 'tweet'));
    }

    public function index(){
        $this->authorize('manager');
        $gallery = Gallery::all();
        return view('backoffice.gallery.all', compact('gallery'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        return view('backoffice.gallery.create');
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
        ]);
        $gallery = new Gallery();
        $gallery->url = request()->file('url')->hashName();
        $request->file('url')->storePublicly('img/portfolio' , 'public');
        $gallery->icon = $request->icon;
        $gallery->save();
        return redirect()->route('gallery.index')->with('message', 'Succesfully Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $this->authorize('manager');
        return view('backoffice.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->authorize('manager');
        return view('backoffice.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        request()->validate([
            'url'=>['required'],
        ]);
        if($request->file('url') !== null){
            Storage::disk('public')->delete('img/portfolio' . $gallery->url);
            $gallery->url = request()->file('url')->hashName();
            $request->file('url')->storePublicly('img/portfolio' , 'public');
        }
        $gallery->icon = $request->icon;
        $gallery->save();
        return redirect()->route('gallery.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete('img/portfolio' . $gallery->url);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('message', 'Succesfully Deleted');
    }
}
