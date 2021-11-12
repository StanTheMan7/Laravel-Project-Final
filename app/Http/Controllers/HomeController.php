<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Background;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Role;
use App\Models\Tag;
use App\Models\Title;
use App\Models\Trainer;
use App\Models\Tweet;
use App\Models\UserClass;
use Database\Seeders\FooterSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    

    public function indexFront()
    {
        $header = Header::all();
        $background  = Background::all();
        $about = About::all();
        $classe =  Classe::paginate(3);
        $trainer = Trainer::all()->shuffle();
        $gallery = Gallery::paginate(6);
        $contact = Contact::all();
        $titleDesc = Title::all();
        $event = Event::paginate(1);
        $pricing = Pricing::all();
        $client = Client::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet =  Tweet::all();
        $tags = Tag::all();
        $classe_tag = ClasseTag::all();
        $user_classes = UserClass::all();
        $principalEvent = DB::table('events')->orderBy('principal', 'desc')->paginate(1);
        $classePriority = DB::table('classes')->where("status_id",1)->limit(3)->get();
        $filtered = $classe->sortby("status_id");
        
        $currentDate = date("Y/m/d");
        $weekStartDate = '';
        $weekEndDate = '';

        $day = date('w', strtotime($currentDate));
        $daystosbutract = $day - 1;
        $stringdays = "-".strval($daystosbutract)." days";
                
        $weekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currentDate)));
        $stringdays = '6 days';
        $weekEndDate = date("Y/m/d",strtotime($stringdays, strtotime($weekStartDate)));   


        $allInscriptions = DB::table('user_classes')
                            ->selectRaw('count(user_id) as  users , classe_id')
                            ->groupBy('classe_id')
                            ->get();

        $allClasses = DB::table('classes')
                        ->select('id', 'title', 'time', 'date','name')
                        ->get();
                        
                        return view('pages.index', compact('weekStartDate','weekEndDate','allClasses','allInscriptions',"user_classes",'principalEvent','header','titleDesc', 'about', 'classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client', 'footer', 'tweet', 'newsletter', 'tags', 'classe_tag','classePriority', 'filtered'));
    }

    public function changeWeek()
    {
            $header = Header::all();
            $background  = Background::all();
            $about = About::all();
            $classe =  Classe::paginate(3);
            $trainer = Trainer::all()->shuffle();
            $gallery = Gallery::paginate(6);
            $contact = Contact::all();
            $titleDesc = Title::all();
            $event = Event::paginate(1);
            $pricing = Pricing::all();
            $client = Client::all();
            $newsletter = Newsletter::all();
            $footer = Footer::all();
            $tweet =  Tweet::all();
            $tags = Tag::all();
            $classe_tag = ClasseTag::all();
            $user_classes = UserClass::all();
            $principalEvent = DB::table('events')->orderBy('principal', 'desc')->paginate(1);
            $classePriority = DB::table('classes')->where("status_id",1)->limit(3)->get();
            $filtered = $classe->sortby("status_id");

            $allInscriptions = DB::table('user_classes')
                            ->selectRaw('count(user_id) as  users , classe_id')
                            ->groupBy('classe_id')
                            ->get();

            $allClasses = DB::table('classes')
                        ->select('id', 'title', 'time', 'date','name')
                        ->get();

            $currentDate = date("Y/m/d");
            $weekStartDate = '';
            $weekEndDate = '';
            
            $day = date('w', strtotime($currentDate));
            $daystosbutract = $day - 1;
            $stringdays = "-".strval($daystosbutract)." days";
     
            $weekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currentDate)));
            $stringdays = '6 days';
            $weekEndDate = date("Y/m/d",strtotime($stringdays, strtotime($weekStartDate)));   
            
            return view('pages.index', compact('weekStartDate','weekEndDate','allClasses','allInscriptions',"user_classes",'principalEvent','header','titleDesc', 'about', 'classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client', 'footer', 'tweet', 'newsletter', 'tags', 'classe_tag','classePriority', 'filtered'));
            
            //return redirect()->back(); 
        }   
        
        public function changeWeek2()
        {
                $header = Header::all();
                $background  = Background::all();
                $about = About::all();
                $classe =  Classe::paginate(3);
                $trainer = Trainer::all()->shuffle();
                $gallery = Gallery::paginate(6);
                $contact = Contact::all();
                $titleDesc = Title::all();
                $event = Event::paginate(1);
                $pricing = Pricing::all();
                $client = Client::all();
                $newsletter = Newsletter::all();
                $footer = Footer::all();
                $tweet =  Tweet::all();
                $tags = Tag::all();
                $classe_tag = ClasseTag::all();
                $user_classes = UserClass::all();
                $principalEvent = DB::table('events')->orderBy('principal', 'desc')->paginate(1);
                $classePriority = DB::table('classes')->where("status_id",1)->limit(3)->get();
                $filtered = $classe->sortby("status_id");
    
                $allInscriptions = DB::table('user_classes')
                                ->selectRaw('count(user_id) as  users , classe_id')
                                ->groupBy('classe_id')
                                ->get();
    
                $allClasses = DB::table('classes')
                            ->select('id', 'title', 'time', 'date','name')
                            ->get();
    
                $currentDate = date("Y/m/d");
                $weekStartDate = '';
                $weekEndDate = '';
                
                $day = date('w', strtotime($currentDate));
                $daystosbutract = $day - 1;
                $stringdays = "-".strval($daystosbutract)." days";
                $currWeekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currentDate)));
                $stringdays = '7 days';
                $weekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currWeekStartDate)));
                $stringdays = '6 days';
                $weekEndDate = date("Y/m/d",strtotime($stringdays, strtotime($weekStartDate)));
            
                return view('pages.index', compact('weekStartDate','weekEndDate','allClasses','allInscriptions',"user_classes",'principalEvent','header','titleDesc', 'about', 'classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client', 'footer', 'tweet', 'newsletter', 'tags', 'classe_tag','classePriority', 'filtered'));
                
                //return redirect()->back(); 
            }   

            public function changeWeek3()
            {
                    $header = Header::all();
                    $background  = Background::all();
                    $about = About::all();
                    $classe =  Classe::paginate(3);
                    $trainer = Trainer::all()->shuffle();
                    $gallery = Gallery::paginate(6);
                    $contact = Contact::all();
                    $titleDesc = Title::all();
                    $event = Event::paginate(1);
                    $pricing = Pricing::all();
                    $client = Client::all();
                    $newsletter = Newsletter::all();
                    $footer = Footer::all();
                    $tweet =  Tweet::all();
                    $tags = Tag::all();
                    $classe_tag = ClasseTag::all();
                    $user_classes = UserClass::all();
                    $principalEvent = DB::table('events')->orderBy('principal', 'desc')->paginate(1);
                    $classePriority = DB::table('classes')->where("status_id",1)->limit(3)->get();
                    $filtered = $classe->sortby("status_id");
        
                    $allInscriptions = DB::table('user_classes')
                                    ->selectRaw('count(user_id) as  users , classe_id')
                                    ->groupBy('classe_id')
                                    ->get();
        
                    $allClasses = DB::table('classes')
                                ->select('id', 'title', 'time', 'date','name')
                                ->get();
        
                    $currentDate = date("Y/m/d");
                    $weekStartDate = '';
                    $weekEndDate = '';
                    
                    $day = date('w', strtotime($currentDate));
                    $daystosbutract = $day - 1;
                    $stringdays = "-".strval($daystosbutract)." days";
             
                    $currWeekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currentDate)));
                    $stringdays = '14 days';
                    $weekStartDate = date("Y/m/d",strtotime($stringdays, strtotime($currWeekStartDate)));
                    $stringdays = '6 days';
                    $weekEndDate = date("Y/m/d",strtotime($stringdays, strtotime($weekStartDate)));
    
                    return view('pages.index', compact('weekStartDate','weekEndDate','allClasses','allInscriptions',"user_classes",'principalEvent','header','titleDesc', 'about', 'classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client', 'footer', 'tweet', 'newsletter', 'tags', 'classe_tag','classePriority', 'filtered'));
                    
                    //return redirect()->back(); 
                }   
}
