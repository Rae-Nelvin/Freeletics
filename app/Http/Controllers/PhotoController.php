<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Models\User;

class PhotoController extends Controller
{
    function upload_photos($id){
        if($id == 1)
            {
                $title = "Masukkan Nama Author : ";
                $subtitle = "Masukkan Deskripsi : ";
              $event = 'Author';
            }
            else if($id == 2)
            {
                $title = "Masukkan Judul Gambar (Tidak ditampilkan) : ";
                $subtitle = "Masukkan Deskripsi Gambar (Tidak ditampilkan) : ";
              $event = 'Massworkout';
            }
            else if($id == 3)
            {
                $title = "Masukkan Judul Gambar (Tidak ditampilkan) : ";
                $subtitle = "Masukkan Deskripsi Gambar (Tidak ditampilkan) : ";
              $event = 'Funrun';
            }
            else if($id == 4)
            {
                $title = "Masukkan Judul Gambar (Tidak ditampilkan) : ";
                $subtitle = "Masukkan Deskripsi Gambar (Tidak ditampilkan) : ";
              $event = 'Weeks12';
            }
            else if($id == 5)
            {
                $title = "Masukkan Judul Event : ";
                $subtitle = "Masukkan Deskripsi Event";
              $event = 'Event';
            }
            else if($id == 6)
            {
                $title = "Masukkan Judul Blog : ";
                $subtitle = "Masukkan Deskripsi Blog (Tidak ditampilkan) : ";
              $event = 'Blog';
            }
            else if($id == 7)
            {
                $title = "Masukkan Nama Tester : ";
                $subtitle = "Masukkan Deskripsi Testimonial : ";
                $event = 'Testimonial';
            }
            else if($id == 8)
            {
                $title = "Masukkan Nama Sponsor : ";
                $subtitle = "Masukkan Link Website Sponsor : ";
                $event = 'Sponsor';
            }
            else if($id == 9)
            {
                $event = 'Calender';
            }
        return view('admin.upload_photos',['event'=>$event,'title'=>$title,'subtitle'=>$subtitle]);
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

        return redirect('admin/'.$request->event)->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function edit_photos($id){
        $photos = Photos::get()->where('id',$id);
        $event = Photos::select('event')->where('id',$id)->get();
        if($event == '[{"event":"Author"}]')
            {
                $title = "Nama Author ";
                $subtitle = "Deskripsi ";
            }
            else if($event == '[{"event":"Massworkout"}]')
            {
                $title = "Judul Gambar (Tidak ditampilkan) ";
                $subtitle = "Deskripsi Gambar (Tidak ditampilkan) ";
            }
            else if($event == '[{"event":"Funrun"}]')
            {
                $title = "Judul Gambar (Tidak ditampilkan) ";
                $subtitle = "Deskripsi Gambar (Tidak ditampilkan) ";
            }
            else if($event == '[{"event":"Weeks12"}]')
            {
                $title = "Judul Gambar (Tidak ditampilkan) ";
                $subtitle = "Deskripsi Gambar (Tidak ditampilkan) ";
            }
            else if($event == '[{"event":"Event"}]')
            {
                $title = "Judul Event ";
                $subtitle = "Deskripsi Event";
            }
            else if($event == '[{"event":"Blog"}]')
            {
                $title = "Judul Blog ";
                $subtitle = "Deskripsi Blog (Tidak ditampilkan) ";
            }
            else if($event == '[{"event":"Testimonial"}]')
            {
                $title = "Nama Tester ";
                $subtitle = "Deskripsi Testimonial ";
            }
            else if($event == '[{"event":"Sponsor"}]')
            {
                $title = "Nama Sponsor ";
                $subtitle = "Link Website Sponsor ";
            }
            else if($event == '[{"event":"Calender"}]')
            {
            }
            
        return view('admin.edit_photos',['photo'=>$photos,'title'=>$title,'subtitle'=>$subtitle,'event'=>$event]);
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
