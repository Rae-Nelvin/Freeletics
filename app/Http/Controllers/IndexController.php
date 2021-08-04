<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Posts;
use App\Models\Captions;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    function index(){
        return view('welcome');
    }

    function home(){
        $author1 = Photos::get()->where('event','Author')->where('id',1);
        $author2 = Photos::get()->where('event','Author')->where('id','>',1);
        $massworkout = Photos::orderBy('id', 'DESC')->where('event','Massworkout')->take(6)->get();
        $funrun = Photos::orderBy('id','DESC')->where('event','Funrun')->take(6)->get();
        $weeks12 = Photos::orderBy('id','DESC')->where('event','Weeks12')->take(6)->get();
        $event = Posts::orderBy('id','DESC')->where('event','Event')->take(6)->get();
        $blog = Posts::orderBy('id','DESC')->where('event','Blog')->take(6)->get();
        $testimonial = Photos::orderBy('id','DESC')->where('event','Testimonial')->take(6)->get();
        $sponsor = Photos::get()->where('event','Sponsor');
        $caption_author = Captions::where('event','Author')->get();
        $caption_massworkout = Captions::where('event','Massworkout')->get();
        return view('home',['author1'=>$author1,'author2'=>$author2,'massworkout'=>$massworkout,
                            'funrun'=>$funrun,'weeks12'=>$weeks12,
                            'event'=>$event,'blog'=>$blog,
                            'testimonial'=>$testimonial,'sponsor'=>$sponsor,
                            'caption_author'=>$caption_author,'caption_massworkout'=>$caption_massworkout]);
    }

    function blog($id){
        $blog = Posts::where('id','=',$id)->get();
        $other = Posts::where('id','!=',$id)->take(3)->get();
        return view('blog.blog',['blog'=>$blog,'other'=>$other]);
    }

    function event($id){
        $event = Posts::where('id','=',$id)->get();
        $other = Posts::where('id','!=',$id)->take(3)->get();
        return view('event.event',['event'=>$event,'other'=>$other]);
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

    function datepicker(Request $request)
    {

        $month = $request->datepicker;
        $id = $request->id;
        if($id == 1)
        {
            $event = 'Massworkout';
        }
        else if($id == 2)
        {
            $event = 'Funrun';
        }
        else if($id == 3)
        {
            $event = 'Weeks12';
        }
        $result = Photos::where('event',$event)->whereMonth('created_at', '=', $month)->get();


        return view('gallery.gallery-more', ['photo'=>$result,'id'=>$id]);
    }

    function getevent($id){
        
        if($id == 1){
            $event = "event";
        }else if($id == 2){
            $event = "blog";
        }
        $post = Posts::where("event",$event)->orderBy("id","DESC")->take(1)->get();      
        $other = Posts::take(3)->get();
        
        return view($event.".".$event,[$event => $post,'other' => $other]);

    }
}
