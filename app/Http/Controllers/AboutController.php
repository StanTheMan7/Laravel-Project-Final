<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Title;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        $about = About::all();
        $header = Header::all();
        $client = Client::all();
        $titleDesc = Title::all();
        $event = Event::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet = Tweet::all();
        return view('pages.about', compact('about', 'header', 'client', 'titleDesc', 'event','newsletter','footer','tweet'));
    }
    
    public function index()
    {
        $this->authorize('manager');
        $about = About::all();
        return view('backoffice.about.all', compact('about'));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {   
        $this->authorize('manager');
        return view('backoffice.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $this->authorize('manager');
        return view('backoffice.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        request()->validate([
            'title'=>['required'],
            'description1'=>['required'],
            'description2'=>['required'],
            'video'=>['required'],
            'button'=>['required']
        ]);
        $about->title = $request->title;
        $about->description1 = $request->description1;
        $about->description2 = $request->description2;
        if ($request->file('url') !== null) {
            Storage::disk("public")->delete("img/about" . $about->url);
            $about->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img/about", "public");
        }
        $about->video = $request->video;
        $about->button = $request->button;
        $about->save();
        return redirect()->route('about.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::disk("public")->delete("img/about/" . $about->url);
        $about->delete();
        return redirect()->route("about.index")->with('message', 'IT WORKS message deleted');
    }
}
