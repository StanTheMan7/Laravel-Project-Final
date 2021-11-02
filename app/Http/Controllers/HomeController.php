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
        $classe =  Classe::all();
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
        $principalEvent = DB::table('events')->orderBy('principal', 'desc')->paginate(1);
        return view('pages.index', compact('principalEvent','header','titleDesc', 'about', 'classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client', 'footer', 'tweet', 'newsletter', 'tags', 'classe_tag'));
    }
}
