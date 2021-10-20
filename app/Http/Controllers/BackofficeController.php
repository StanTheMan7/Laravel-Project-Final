<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Background;
use App\Models\Classe;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Title;
use App\Models\Trainer;
use App\Models\Tweet;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index(){
        $header = Header::all();
        $background  = Background::all();
        $about = About::all();
        $classe =  Classe::all();
        $trainer = Trainer::all();
        $gallery = Gallery::all();
        $contact = Contact::all();
        $titleDesc = Title::all();
        $event = Event::all();
        $pricing = Pricing::all();
        $client = Client::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $tweet =  Tweet::all();
        return view('pages.indexBo', compact('header', 'titleDesc', 'about','classe',  'gallery', 'contact', 'background', 'trainer', 'event', 'pricing', 'client','footer', 'tweet', 'newsletter'));
}
}