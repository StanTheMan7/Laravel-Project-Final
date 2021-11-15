<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $client = Client::all();
        return view('backoffice.client.all',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        return view('backoffice.client.create');
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
            'icon'=>['required'],
            'text'=>['required'],
            'url'=>['required'],
            'function'=>['required']
        ]);
        $client = new Client();
        $client->icon = $request->icon;
        $client->text = $request->text;
        $client->url = $request->file('url')->hashName();
        $request->file('url')->storePublicly('img', 'public');
        $client->save();
        return redirect()->route('client.index')->with('message', 'Succesfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $this->authorize('manager');
        return view('backoffice.client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $this->authorize('manager');
        return view('backoffice.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate([
            'icon'=>['required'],
            'text'=>['required'],
            'function'=>['required']
        ]);
        if($request->file('url') !== null){
            Storage::disk('public')->delete('img/icon' . $client->url);
            $client->url = $request->file('url')->hashName();
            $request->file('url')->storePublicly('img/icon', 'public');
        }
        $client->icon = $request->icon;
        $client->text = $request->text;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        Storage::disk('public')->delete('img/' . $client->url);
        $client->delete();
        return redirect()->route('client.index')->with('message', 'Succesfully Deleted');
    }
}
