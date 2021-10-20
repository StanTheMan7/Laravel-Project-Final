<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        return view('backoffice.header.all', compact('header'));
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
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        return view('backoffice.header.show',compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('backoffice.header.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        request()->validate([
            'li1'=>['required'],
            'li2'=>['required'],
            'li3'=>['required'],
            'li4'=>['required'],
            'li5'=>['required']
        ]);
        if($request->file('logo')!== null){

            Storage::disk('public')->delete('img/logo' . $header->logo);
            $header->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly('img/logo', 'public');
        }
        $header->li1 = $request->li1;
        $header->li2 = $request->li2;
        $header->li3 = $request->li3;
        $header->li4 = $request->li4;
        $header->li5 = $request->li5;
        $header->save();
        return redirect()->route('header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        Storage::disk('public')->delete('img/logo' . $header->logo);
        $header->delete();
        return redirect()->route('header.index');
    }
}
