<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer =  Trainer::all();
        return view('backoffice.trainer.all', compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $trainers = Trainer::all();
        $roles = Role::all();
        return view('backoffice.trainer.create', compact('roles', 'trainers'));
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
            'name'=>['required'],
            'icon1'=>['required'],
            'icon2'=>['required'],
            'icon3'=>['required'],
            'icon4'=>['required'],
            'link1'=>['required'],
            'link2'=>['required'],
            'link3'=>['required'],
            'link4'=>['required'],
        ]);
        $trainer = new Trainer();
        $trainer->url = $request->file('url')->hashName();
        $request->file('url')->storePublicly('img/trainer', 'public');
        $trainer->name = $request->name;
        $trainer->icon1 = $request->icon1;
        $trainer->icon2 = $request->icon2;
        $trainer->icon3 = $request->icon3;
        $trainer->icon4 = $request->icon4;
        $trainer->link1 = $request->link1;
        $trainer->link2 = $request->link2;
        $trainer->link3 = $request->link3;
        $trainer->link4 = $request->link4;
        $trainer->role_id = $request->role_id;
        $trainer->save();
        return redirect()->route('trainer.index')->with('message', 'Succesfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        return view('backoffice.trainer.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('backoffice.trainer.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {   
        request()->validate([
            'name'=>['required'],
            'icon1'=>['required'],
            'icon2'=>['required'],
            'icon3'=>['required'],
            'icon4'=>['required'],
            'link1'=>['required'],
            'link2'=>['required'],
            'link3'=>['required'],
            'link4'=>['required'],
        ]);
        if($request->file('url') !== null){

            Storage::disk('public')->delete('img/trainer' . $trainer->url);
            $trainer->url = $request->file('url')->hashName();
            $request->file('url')->storePublicly('img/trainer', 'public');
        }
        $trainer->name = $request->name;
        $trainer->icon1 = $request->icon1;
        $trainer->icon2 = $request->icon2;
        $trainer->icon3 = $request->icon3;
        $trainer->icon4 = $request->icon4;
        $trainer->link1 = $request->link1;
        $trainer->link2 = $request->link2;
        $trainer->link3 = $request->link3;
        $trainer->link4 = $request->link4;
        $trainer->save();
        return redirect()->route('trainer.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        Storage::disk('public')->delete('img/trainer' . $trainer->url);
        $trainer->delete();
        return redirect()->route('trainer.index')->with('message', 'Succesfully Deleted');
    }
}
