<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.dashboard');
    }

    function author(){
        return view('admin.author');
    }

    function massworkout(){
        return view('admin.massworkout');
    }

    function funrun(){
        return view('admin.funrun');
    }

    function weeks12(){
        return view('admin.weeks12');
    }

    function event(){
        return view('admin.event');
    }

    function blog(){
        return view('admin.blog');
    }

    function testimonial(){
        return view('admin.testimonial');
    }

    function sponsor(){
        return view('admin.sponsor');
    }

    function calender(){
        return view('admin.calender');
    }
}
