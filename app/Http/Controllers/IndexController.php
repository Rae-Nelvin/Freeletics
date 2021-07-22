<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Posts;
use App\Models\Captions;

class IndexController extends Controller
{
    function index(){
        $author1 = Photos::get()->where('event','Author')->where('id',25);
        $author2 = Photos::get()->where('event','Author')->where('id','>',25);
        $massworkout = Photos::orderBy('id', 'DESC')->where('event','Massworkout')->take(6)->get();
        $funrun = Photos::orderBy('id','DESC')->where('event','Funrun')->take(6)->get();
        $weeks12 = Photos::orderBy('id','DESC')->where('event','Weeks12')->take(6)->get();
        $event = Posts::orderBy('id','DESC')->where('event','Event')->take(6)->get();
        $blog = Posts::orderBy('id','DESC')->where('event','Blog')->take(6)->get();
        $testimonial = Photos::orderBy('id','DESC')->where('event','Testimonial')->take(6)->get();
        $sponsor = Photos::get()->where('event','Sponsor');
        $caption_author = Captions::where('event','Author')->get();
        $caption_massworkout = Captions::where('event','Massworkout')->get();
        $caption_funrun = Captions::where('event','Funrun')->get();
        $caption_weeks12 = Captions::where('event','Weeks12')->get();
        return view('home',['author1'=>$author1,'author2'=>$author2,'massworkout'=>$massworkout,
                            'funrun'=>$funrun,'weeks12'=>$weeks12,
                            'event'=>$event,'blog'=>$blog,
                            'testimonial'=>$testimonial,'sponsor'=>$sponsor,
                            'caption_author'=>$caption_author,'caption_massworkout'=>$caption_massworkout,
                            'caption_funrun'=>$caption_funrun,'caption_weeks12'=>$caption_weeks12]);
    }

    function blog(){
        return view('blog.blog');
    }

    function gallery($id){
        if($id == 1)
        {
            $caption = Captions::where('event','Massworkout')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Massworkout')->take(3)->get();
            return view('gallery.gallery',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }

        else if($id == 2)
        {
            $caption = Captions::where('event','Funrun')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Funrun')->take(3)->get();
            return view('gallery.gallery',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }

        else if($id == 3)
        {
            $caption = Captions::where('event','Weeks12')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Weeks12')->take(3)->get();
            return view('gallery.gallery',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }
        
    }

    function gallerymore($id){
        if($id == 1)
        {
            $caption = Captions::where('event','Massworkout')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Massworkout')->get();
            return view('gallery.gallery-more',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }

        else if($id == 2)
        {
            $caption = Captions::where('event','Funrun')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Funrun')->get();
            return view('gallery.gallery-more',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }

        else if($id == 3)
        {
            $caption = Captions::where('event','Weeks12')->get();
            $photo = Photos::orderBy('id', 'DESC')->where('event','Weeks12')->get();
            return view('gallery.gallery-more',['caption'=>$caption,'photo'=>$photo,'id'=>$id]);
        }

    }
    function event(){
        return view('event.event');
    }

}