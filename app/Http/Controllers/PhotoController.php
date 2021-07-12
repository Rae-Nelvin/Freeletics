<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Models\User;
use App\Models\Posts;

class PhotoController extends Controller
{
    function upload_photos($id){
        if($id == 1)
            {
                $title = "Masukkan Nama Author : ";
                $subtitle = "Masukkan Deskripsi Author : ";
              $event = 'Author';
              return view('admin.upload_author',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
            }
            else if($id == 2)
            {
              $event = 'Massworkout';
              return view('admin.upload_photos',['event'=>$event]);
            }
            else if($id == 3)
            {
              $event = 'Funrun';
              return view('admin.upload_photos',['event'=>$event]);
            }
            else if($id == 4)
            {
              $event = 'Weeks12';
              return view('admin.upload_photos',['event'=>$event]);
            }
            else if($id == 5)
            {
                $title = "Masukkan Judul Event : ";
                $subtitle = "Masukkan Deskripsi Event";
              $event = 'Event';
              return view('admin.upload_post',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
            }
            else if($id == 6)
            {
                $title = "Masukkan Judul Blog : ";
                $subtitle = "Masukkan Deskripsi Blog : ";
              $event = 'Blog';
              return view('admin.upload_post',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
            }
            else if($id == 7)
            {
                $title = "Masukkan Nama Tester : ";
                $subtitle = "Masukkan Deskripsi Testimonial : ";
                $event = 'Testimonial';
                return view('admin.upload_author',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
            }
            else if($id == 8)
            {
                $title = "Masukkan Nama Sponsor : ";
                $subtitle = "Masukkan Link Website Sponsor : ";
                $event = 'Sponsor';
                return view('admin.upload_author',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
            }
            else if($id == 9)
            {
                $event = 'Calender';
            }
        
    }

    function uploadphotos(Request $request){
        $request->validate([
            'title' => 'required',
            'event' => 'required',
        ]);

        $id = Session::get('LoggedUser');

        $files = $request->file('images');

        foreach($files as $file){
            $imageName = $request->event.'/'.$file->getClientOriginalName();
            $file->move(public_path('freeletics_images/'. $request->event), $imageName);
            
            Photos::create([
                'author_id' => $id,
                'caption' => $request->title,
                'subtitle' => $request->subtitle,
                'event' => $request->event,
                'file_path' => $imageName
            ]);
        }

        return redirect('admin/'.$request->event)->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function uploadpost(Request $request){
        $request->validate([
            'title' => 'required',
            'event' => 'required',
            'content' => 'required',
            'image_path' => 'required|image'
        ]);

        $imageName = $request->event.'/'.$request->image_path->getClientOriginalName();
        $request->image_path->move(public_path('freeletics_images/'. $request->event), $imageName);
        $id = Session::get('LoggedUser');

        Posts::create([
            'author_id' => $id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'event' => $request->event,
            'content' => $request->content,
            'image_path' => $imageName
        ]);

        return redirect('admin/'.$request->event)->with('Successful', 'Your Post has been uploaded successfully!!');
    }

    function edit_photos($id){
        $photos = Photos::get()->where('id',$id);
        $event = Photos::select('event')->where('id',$id)->get();
        if($event == '[{"event":"Author"}]')
            {
                $title = "Nama Author ";
                $subtitle = "Deskripsi ";
                return view('admin.edit_author',['photo'=>$photos,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event]);
            }
            else if($event == '[{"event":"Massworkout"}]')
            {
                return view('admin.edit_photos',['photo'=>$photos]);
            }
            else if($event == '[{"event":"Funrun"}]')
            {
                return view('admin.edit_photos',['photo'=>$photos]);
            }
            else if($event == '[{"event":"Weeks12"}]')
            {
                return view('admin.edit_photos',['photo'=>$photos]);
            }
            else if($event == '[{"event":"Testimonial"}]')
            {
                $title = "Nama Author ";
                $subtitle = "Deskripsi ";
                return view('admin.edit_author',['photo'=>$photos,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event]);
            }
            else if($event == '[{"event":"Sponsor"}]')
            {
                $title = "Nama Sponsor ";
                $subtitle = "Link Sponsor ";
                return view('admin.edit_author',['photo'=>$photos,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event]);
            }

            
       
    }

    function edit_post($id)
    {
        $post = Posts::get()->where('id',$id);
        $event2 = Posts::select('event')->where('id',$id)->get();
        if($event2 == '[{"event":"Event"}]')
        {
            $title = "Judul Event ";
            $subtitle = "Deskripsi Event";
            return view('admin.edit_post',['post'=>$post,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event2]);
        }
        else if($event2 == '[{"event":"Blog"}]')
        {
            $title = "Judul Blog ";
            $subtitle = "Deskripsi Blog ";
            return view('admin.edit_post',['post'=>$post,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event2]);
        }   
    }

    function editphotos(Request $request){
        $request->validate([
            'title' => 'required',
            'file_path' => 'required|image'
        ]);

        $imageName = $request->event.'/'.$request->file_path->getClientOriginalName();
        $request->file_path->move(public_path('freeletics_images/'. $request->event), $imageName);

        $edit = Photos::where('id',$request->id)
            ->update([
                'caption' => $request->title,
                'subtitle' => $request->subtitle,
                'file_path' => $imageName
            ]);
        
            return redirect('admin/'.$request->event)->with('Successful', 'Your Photo has been updated successfully!!');
    }

    function editpost(Request $request){
        $request->validate([
            'title' => 'required',
            'event' => 'required',
            'content' => 'required',
            'image_path' => 'required|image'
        ]);

        $imageName = $request->event.'/'.$request->image_path->getClientOriginalName();
        $request->image_path->move(public_path('freeletics_images/'. $request->event), $imageName);

        $edit = Posts::where('id',$request->id)
            ->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'event' => $request->event,
                'content' => $request->content,
                'image_path' => $imageName
            ]);
        
            return redirect('admin/'.$request->event)->with('Successful', 'Your Photo has been updated successfully!!');
    }

    function delete($id){
        $event = Photos::select('event')->where('id',$id)->get();
        if($event == '[{"event":"Author"}]')
            {
                $event1 = 'Author';
            }
            else if($event == '[{"event":"Massworkout"}]')
            {
                $event1 = 'Massworkout';
            }
            else if($event == '[{"event":"Funrun"}]')
            {
                $event1 = 'Funrun';
            }
            else if($event == '[{"event":"Weeks12"}]')
            {
                $event1 = 'Weeks12';
            }
            else if($event == '[{"event":"Event"}]')
            {
                $event1 = 'Event';
            }
            else if($event == '[{"event":"Blog"}]')
            {
                $event1 = 'Blog';
            }
            else if($event == '[{"event":"Testimonial"}]')
            {
                $event1 = 'Testimonial';
            }
            else if($event == '[{"event":"Sponsor"}]')
            {
                $event1 = 'Sponsor';
            }
            else if($event == '[{"event":"Calender"}]')
            {
                $event1 = 'Calender';
            }
        $delete = Photos::get()->where('id',$id);
        $delete->each->delete();

        return redirect('admin/'.$event1)->with('Successful', 'Your Photo has been deleted successfully!!');
    }
}
