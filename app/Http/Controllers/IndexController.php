<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Posts;

class IndexController extends Controller
{
    function index(){
        $author = Photos::get()->where('event','Author');
        $massworkout = Photos::get()->where('event','Massworkout');
        $funrun = Photos::get()->where('event','Funrun');
        $weeks12 = Photos::get()->where('event','Weeks12');
        $event = Posts::get()->where('event','Event');
        $blog = Posts::get()->where('event','Blog');
        $testimonial = Photos::get()->where('event','Testimonial');
        $sponsor = Photos::get()->where('event','Sponsor');
        return view('home',['author'=>$author,'massworkout'=>$massworkout,
                            'funrun'=>$funrun,'weeks12'=>$weeks12,
                            'event'=>$event,'blog'=>$blog,
                            'testimonial'=>$testimonial,'sponsor'=>$sponsor]);
    }
}
