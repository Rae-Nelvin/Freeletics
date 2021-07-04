<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotoController extends Controller
{
    function upload_photos(){
        return view('admin.upload_photos');
    }

    function upload(Request $request){
        $request->validate([
            'title' => 'required',
            'event' => 'required',
            'file_path' => 'required|image'
        ]);

        $imageName = $request->event.'/'.$request->file_path->getClientOriginalName();
        $request->file_path->move(public_path('freeletics_images/'. $request->event), $imageName);

        Photos::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'event' => $request->event,
            'file_path' => $imageName
        ]);
    }
}
