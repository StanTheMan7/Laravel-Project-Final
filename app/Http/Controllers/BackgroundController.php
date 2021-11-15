<?php

namespace App\Http\Controllers;

use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $this->authorize('manager');
        $background = Background::all();
        return view('backoffice.background.all', compact('background')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        return view('backoffice.background.create');
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
            'title'=>['required'],
            'bigTitle'=>['required'],
            'description'=>['required'],
            'url'=>['required'],
            'button'=>['required'],
        ]);
        $background = new Background();
        $background->title = $request->title;
        $background->bigTitle = $request->bigTitle;
        $background->description = $request->description;
        $background->button = $request->button;
        $background->url= $request->file("url")->hashName();
        $request->file("url")->storePublicly("img/slider", "public");
        $request->principal == 'true' ? $background->principal = 1: $background->principal = 0;
        $background->save();
        return redirect()->route("background.index")->with('message', 'Succesfully Created');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function show(Background $background)
    {
        $this->authorize('manager');
        return view('backoffice.background.show', compact('background'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function edit(Background $background)
    {
        $this->authorize('manager');
        return view('backoffice.background.edit', compact('background'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Background $background)
    {
        request()->validate([
            'title'=>['required'],
            'bigTitle'=>['required'],
            'description'=>['required'],
            'button'=>['required'],
        ]);

        if($request->file('url') !== null) {
            Storage::disk('public')->delete('img/slider' . $background->url);
            $background->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img/slider", "public");
        }
        $background->title = $request->title;
        $background->bigTitle = $request->bigTitle;
        $background->description = $request->description;
        // dd($request->principal);
        $request->principal == 'true' ? $background->principal = 1: $background->principal = 0;
        $background->save();
        return redirect()->route("background.index")->with('message', 'Succesfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function destroy(Background $background)
    {
        Storage::disk('public')->delete('img/' . $background->url);
        $background->delete();
        return redirect()->route('background.index')->with('message', 'Data succesfully deleted !!!');
    }
}
