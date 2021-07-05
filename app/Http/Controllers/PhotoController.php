<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Database\Eloquent\Collection;

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

    function edit_photos($id){
        $photos = Photos::get()->where('id',$id);
        return view('admin.edit_photos',['photo'=>$photos]);
    }

    function edit(Request $request){
        $request->validate([
            'title' => 'required',
            'file_path' => 'required|image'
        ]);

        $imageName = $request->event.'/'.$request->file_path->getClientOriginalName();
        $request->file_path->move(public_path('freeletics_images/'. $request->event), $imageName);

        $edit = Photos::where('id',$request->id)
            ->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'file_path' => $imageName
            ]);
        
        return view('admin.dashboard');
    }

    function delete($id){
        $delete = Photos::get()->where('id',$id);
        $delete->each->delete();
        return view('admin.dashboard');
    }
}
