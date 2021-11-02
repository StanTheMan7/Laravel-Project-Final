<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Title;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = Pricing::all();
        return view('backoffice.pricing.all', compact('pricing'));
    }
    public function payment($id){

        $data = [
            'pricing' => Pricing::find($id),
            'header' => Header::all(),
            'client' => Client::all(),
            'titleDesc' => Title::all(),
            'newsletter' => Newsletter::all(),
            'footer' => Footer::all(),
            'tweet' => Tweet::all(),
        ];
        return view('pages.payment', $data);
    }

    public function payed($id){

        $user = User::find(Auth::user()->id);
        $user->pricing_id = $id;
        $user->save();

        $data = [
            'pricing' => Pricing::find($id),
            'header' => Header::all(),
            'client' => Client::all(),
            'titleDesc' => Title::all(),
            'newsletter' => Newsletter::all(),
            'footer' => Footer::all(),
            'tweet' => Tweet::all(),
        ];
        return view('pages.payed', $data);
    }
    public function updateValue($id){
        
        $pricing = Pricing::find($id);
        
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
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        return view('backoffice.pricing.show', compact('pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        return view('backoffice.pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        request()->validate([
            'package'=>['required'],
            'price'=>['required'],
            'month'=>['required'],
            'gift1'=>['required'],
            'gift2'=>['required'],
            'gift3'=>['required'],
            'gift4'=>['required'],
            'button'=>['required']
        ]);
        $pricing->package = $request->package;
        $pricing->price = $request->price;
        $pricing->month = $request->month;
        $pricing->gift1 = $request->gift1;
        $pricing->gift2 = $request->gift2;
        $pricing->gift3 = $request->gift3;
        $pricing->gift4 = $request->gift4;
        $pricing->button = $request->button;
        $pricing->save();
        return redirect()->route('pricing.index')->with('message', 'Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return redirect()->route('pricing.index')->with('message', 'Succesfully Deleted');
    }
}
