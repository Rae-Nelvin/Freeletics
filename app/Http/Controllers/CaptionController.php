<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Captions;
use Session;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class CaptionController extends Controller
{
    function upload_caption($idt){
      $id = Session::get('LoggedUser');
      $admin = User::where('id',$id)->get(['name']);
        if($idt == 1)
        {
          $event = 'Author';
          $caption = Captions::where("event","Author")->get();
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event,'caption'=>$caption]);
        }
        else if($idt == 2)
        {
          $event = 'Massworkout';
          $caption = Captions::where("event","Author")->get();
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event,'caption'=>$caption]);
        }
        else if($idt == 3)
        {
          $event = 'Funrun';
          $caption = Captions::where("event","Author")->get();
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event,'caption'=>$caption]);
        }
        else if($idt == 4)
        {
          $event = 'Weeks12';
          $caption = Captions::where("event","Author")->get();
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event,'caption'=>$caption]);
        }
    }

    function uploadcaption(Request $request){

        $request->validate([
            'caption' => 'required',
            'event' => 'required',
        ]);

        $id = Session::get('LoggedUser');

        if($request->event == "Massworkout"){
          $event = "Massworkout";
        }else{
          $event = "Author";
        }

        $count = Captions::get()->where('event',$event)->count();
        if($count < 1){
        Captions::create([
            'author_id' => $id,
            'captions' => $request->caption,
            'event' => $event
        ]);
        }
        else{
            Captions::where('event',$event)
            ->update([
                'captions' => $request->caption
            ]);
        }
        
        return redirect('admin/'.$event)->with('Successful', 'Your Caption has been uploaded successfully!!');
    }
}