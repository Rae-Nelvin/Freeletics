<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Posts;

class IndexController extends Controller
{
    function index(){
        $author = Photos::get()->where('event','Author');
        $massworkout = Photos::orderBy('id', 'DESC')->where('event','Massworkout')->take(6)->get();
        $funrun = Photos::orderBy('id','DESC')->where('event','Funrun')->take(6)->get();
        $weeks12 = Photos::orderBy('id','DESC')->where('event','Weeks12')->take(6)->get();
        $event = Posts::orderBy('id','DESC')->where('event','Event')->take(6)->get();
        $blog = Posts::orderBy('id','DESC')->where('event','Blog')->take(6)->get();
        $testimonial = Photos::orderBy('id','DESC')->where('event','Testimonial')->take(6)->get();
        $sponsor = Photos::get()->where('event','Sponsor');
        return view('home',['author'=>$author,'massworkout'=>$massworkout,
                            'funrun'=>$funrun,'weeks12'=>$weeks12,
                            'event'=>$event,'blog'=>$blog,
                            'testimonial'=>$testimonial,'sponsor'=>$sponsor]);
    }

    function blog(){
        return view('blog.blog');
    }

    function gallery(){
        return view('gallery.gallery');
    }
}
