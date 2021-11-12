<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailNews;
use App\Models\Category;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Status;
use App\Models\Tag;
use App\Models\Title;
use App\Models\Trainer;
use App\Models\Tweet;
use App\Models\User;
use App\Models\UserClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        $classePriority = DB::table('classes')->where("status_id",1)->limit(3)->get();
        $filtered = $classe->sortby("status_id");
        
        return view('pages.classes' , compact('classe', 'header', 'client', 'titleDesc', 'footer', 'tweet', 'pricing','newsletter','classePriority','filtered'));
    }
     
    public function index(){
        $classe = Classe::all();
        $tags = Tag::all();
        $classe_tag = ClasseTag::all();
        $categories = Category::all();
        $trainers = Trainer::all();
        $user_classes = UserClass::all();
        return view('backoffice.classe.all',compact('user_classes','classe','tags','classe_tag', 'categories','trainers'));
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
        $trainers = Trainer::all();
        $status = Status::all();
        
        return view('backoffice.classe.create',compact('classe', 'tags','classe_tag','categories','trainers','status'));
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
        $classe->trainer_id = $request->trainer_id[0];
        $classe->status_id = $request->status_id;
        $classe->nrMax = 15;
        $classe->date = $request->date;
        $classe->save();
        foreach ($tab as $idTag) {
            $classe_tag = new ClasseTag();
            $classe_tag->classe_id = $classe->id;
            $classe_tag->tag_id = $idTag;
            
            $classe_tag->save();
        }
        return redirect()->route('classe.index')->with('message', 'Succesfully Created');
    }

    public function inscription(Classe $classe, User $user){
        
        $allClassesForUser = DB::table('user_classes')
                            ->select('classe_id', 'user_id')
                            ->where([
                                ['user_id', '=', $user->id],
                                ['classe_id', '=', $classe->id]
                            ])
                            ->get();

        if($allClassesForUser->count() == 0){
        
            $classeUser = new UserClass();
            $classeUser->classe_id = $classe->id;
            $classeUser->user_id = $user->id;
            $classeUser->save();
        }else{
            // echo ("<script>alert('You have already registered to this class');</script>");
            return redirect()->back()->with('error', 'You have been already registered to classe: '  .  $classe->title . ' with classe ID: ' . $classe->id);
        }
            return redirect()->back()->with('message', 'You have succesfully booked class: '   .  $classe->title . ' with classe ID: ' . $classe->id);
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
       
        $user = User::all();
        $classesFromDB = DB::table('user_classes')
                        ->select('classe_id')
                        ->where('classe_id','=',$classe->id)
                        ->get();
        return view('backoffice.classe.show', compact('classe','user','classesFromDB'));
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
            'date'=>['required'],
            'trainer_id'=>['required'],
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
        $classe->date = $request->date;
        $classe->status_id = $request->status_id;
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
