<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
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
        return view('backoffice.tweet.all',compact('tweet'));
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
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function show(Tweet $tweet)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function edit(Tweet $tweet)
    {
        $this->authorize('manager');
        return view('backoffice.tweet.edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tweet $tweet)
    {
        request()->validate([
            'title'=>['required'],
            'icon4'=>['required'],
            'text2'=>['required'],
            'link1'=>['required'],
            'icon5'=>['required'],
            'text3'=>['required'],
            'link2'=>['required'],
        ]);
        $tweet->title = $request->title;
        $tweet->icon4 = $request->icon4;
        $tweet->text2 = $request->text2;
        $tweet->link1 = $request->link1;
        $tweet->icon5 = $request->icon5;
        $tweet->text3 = $request->text3;
        $tweet->link2 = $request->link2;
        $tweet->save();
        return redirect()->route('footer.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return redirect()->route('footer.index');
    }
}
