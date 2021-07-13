<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Captions;
use Session;
use Illuminate\Database\Eloquent\Collection;

class CaptionController extends Controller
{
    function upload_caption($id){
        if($id == 1)
        {
          $event = 'Author';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 2)
        {
          $event = 'Massworkout';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 3)
        {
          $event = 'Funrun';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 4)
        {
          $event = 'Weeks12';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 5)
        {
          $event = 'Event';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 6)
        {
          $event = 'Blog';
          return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 7)
        {
            $event = 'Testimonial';
            return view('admin.upload_caption',['event'=>$event]);
        }
        else if($id == 8)
        {
            $event = 'Sponsor';
            return view('admin.upload_caption',['event'=>$event]);
        }
    }

    function uploadcaption(Request $request){

        $request->validate([
            'caption' => 'required',
            'event' => 'required',
        ]);

        $id = Session::get('LoggedUser');

        $count = Captions::get()->count();
        if($count < 1){
        Captions::create([
            'author_id' => $id,
            'captions' => $request->caption,
            'event' => $request->event
        ]);
        }
        else{
            Captions::where('event',$request->event)
            ->update([
                'captions' => $request->caption
            ]);
        }
        
        return redirect('admin/'.$request->event)->with('Successful', 'Your Caption has been uploaded successfully!!');
    }
}