<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Form;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\Profile_img;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Social_network;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){

        $about = About::latest()->take(1)->first();
        $contact = Contact::latest()->take(1)->get();
        $fact = Fact::latest()->take(1)->get();
        $form = Form::latest()->take(1)->get();
        $home = Home::latest()->take(1)->get();
        $portfolio = Portfolio::latest()->take(9)->get();
        $profile_img = Profile_img::latest()->take(1)->get();
        $service = Service::latest()->take(6)->get();
        $skill = Skill::latest()->take(6)->get();
        $social_network = Social_network::latest()->take(1)->get();
        

        return view('welcome', compact('about', 'contact',
         'fact', 'form', 'home',
          'portfolio', 'profile_img',
           'service', 'skill', 
           'social_network'));
    }
}

