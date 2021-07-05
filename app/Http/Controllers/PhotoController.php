<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Models\User;

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

        return redirect('admin/dashboard/')->with('Successful', 'Your Photo has been uploaded successfully!!');
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
        
            return redirect('admin/dashboard/')->with('Successful', 'Your Photo has been updated successfully!!');
    }

    function delete($id){
        $delete = Photos::get()->where('id',$id);
        $delete->each->delete();

        return redirect('admin/dashboard/')->with('Successful', 'Your Photo has been deleted successfully!!');
    }
}
