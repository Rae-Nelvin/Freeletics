<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Calender;
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
        return view('admin.dashboard', ['admin' => $admin]);
    }

    function author(){
        $photo = Photos::where('event','author')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.author', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function massworkout(){
        $user = User::get();
        $photo = Photos::where('event','massworkout')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.massworkout', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function funrun(){
        $user = User::get();
        $photo = Photos::where('event','funrun')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.funrun', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function weeks12(){
        $user = User::get();
        $photo = Photos::where('event','weeks12')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.weeks12', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function event(){
        $user = User::get();
        $photo = Photos::where('event','event')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.event', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function blog(){
        $user = User::get();
        $photo = Photos::where('event','blog')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.blog', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function testimonial(){
        $user = User::get();
        $photo = Photos::where('event','testimonial')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.testimonial', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function sponsor(){
        $user = User::get();
        $photo = Photos::where('event','sponsor')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.sponsor', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }

    function calender(){
        $user = User::get();
        $photo = Photos::where('event','calender')->get();
        $calender = Calender::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.calender', ['admin'=>$admin,'photo'=>$photo,'calender'=>$calender]);
    }
}
