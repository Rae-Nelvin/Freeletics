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
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event]);
        }
        else if($idt == 2)
        {
          $event = 'Massworkout';
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event]);
        }
        else if($idt == 3)
        {
          $event = 'Funrun';
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event]);
        }
        else if($idt == 4)
        {
          $event = 'Weeks12';
          return view('admin.upload_caption',['admin'=>$admin,'event'=>$event]);
        }
    }

    function uploadcaption(Request $request){

        $request->validate([
            'caption' => 'required',
            'event' => 'required',
        ]);

        $id = Session::get('LoggedUser');

        $count = Captions::get()->where('event',$request->event)->count();
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