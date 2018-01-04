<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Customer;
use Auth;

class loginController extends Controller
{
    public function index(){
    	return view('user/login');
    }

    public function reg(){
    	return view('user/reg');
    }

    public function change_pass(){
    	return view('user/pass');
    }

    // public function add_data(){
    // 	    return view('user.login');
    // }

    public function add_data(Request $request){
    	$password=bcrypt($request->input('password'));
        $user = new User();
        $user->firstName = $request->firstName;
        $user->lasttName = $request->lasttName;
        $user->email = $request->email;
        $user->password = $password;
        $user->location = $request->location;
        $user->mobile = $request->mobile;
        $user->gender = $request->gender;
        $user->save();
        return view('user.login');
    }

    // public function insert(Request $request){
    //    	$password=bcrypt($request->input('password'));
    //     $user = new User();
    //     $user->firstName = $request->firstName;
    //     $user->lasttName = $request->lasttName;
    //     $user->email = $request->email;
    //     $user->password = $password;
    //     $user->location = $request->location;
    //     $user->mobile = $request->mobile;
    //     $user->gender = $request->gender;
    //     $user->save();
    //     return view('user.login');
    // }

    public function check(Request $request){
        
        if(!Auth::attempt(['email' =>$request->input('email'), 'password' =>$request->input('password')])){

            //return redirect()->route('login')->with('message','Email or Password is Incorrect!');
            return view('Email or Password is Incorrect!');
        }
        return redirect()->route('welcome')->with('message','Login successfully');

    }


    public function getLogout(){
        Auth::logout();
        return redirect('user/login');
    }

}
