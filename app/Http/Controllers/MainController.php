<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Posts;
use Illuminate\Support\Facades\Hash;
use Session;


class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $userInfo = User::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('Fail', 'We do not recognize your email address');
        }
        else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                
                return redirect('admin/dashboard/');
            }
            else{
                return back()->with('Fail', 'Incorrect Password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        $count_Author = Photos::where('event', 'Author')->count();
        $count_Massworkout = Photos::where('event', 'Massworkout')->count();
        $count_Funrun = Photos::where('event', 'Funrun')->count();
        $count_Weeks12 = Photos::where('event', 'Weeks12')->count();
        $count_Event = Posts::where('event', 'Event')->count();
        $count_Blog = Posts::where('event', 'Blog')->count();
        $count_Testimonial = Photos::where('event', 'Testimonial')->count();
        $count_Sponsor = Photos::where('event', 'Sponsor')->count();
        return view('admin.dashboard', ['admin' => $admin,'count_Author'=>$count_Author,
                                        'count_Massworkout'=>$count_Massworkout,
                                        'count_Funrun'=>$count_Funrun,
                                        'count_Weeks12'=>$count_Weeks12,
                                        'count_Event'=>$count_Event,
                                        'count_Blog'=>$count_Blog,
                                        'count_Testimonial'=>$count_Testimonial,
                                        'count_Sponsor'=>$count_Sponsor]);
    }

    function author(){
        $photo = Photos::where('event','author')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.author', ['admin'=>$admin,'photo'=>$photo]);
    }

    function massworkout(){
        $user = User::get();
        $photo = Photos::where('event','massworkout')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.massworkout', ['admin'=>$admin,'photo'=>$photo]);
    }

    function funrun(){
        $user = User::get();
        $photo = Photos::where('event','funrun')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.funrun', ['admin'=>$admin,'photo'=>$photo]);
    }

    function weeks12(){
        $user = User::get();
        $photo = Photos::where('event','weeks12')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.weeks12', ['admin'=>$admin,'photo'=>$photo]);
    }

    function event(){
        $user = User::get();
        $post = Posts::where('event','event')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.event', ['admin'=>$admin,'post'=>$post]);
    }

    function blog(){
        $user = User::get();
        $post = Posts::where('event','blog')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.blog', ['admin'=>$admin,'post'=>$post]);
    }

    function testimonial(){
        $user = User::get();
        $photo = Photos::where('event','testimonial')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.testimonial', ['admin'=>$admin,'photo'=>$photo]);
    }

    function sponsor(){
        $user = User::get();
        $photo = Photos::where('event','sponsor')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.sponsor', ['admin'=>$admin,'photo'=>$photo]);
    }
    
}
