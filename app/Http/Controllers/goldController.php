<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sales_gold;
use App\User;

class goldController extends Controller
{
    public function add_data(Request $request){
        $email = $request->input('email');
        $check = User::where('email', $email)->first();
        if ($check) {
            $mail_check = sales_gold::where('email', $email)->first();
            if($mail_check){
                return "You are eligible for this service again. Please try again after you are out of limit.";
            }else{
                $user = new sales_gold();
                $user->email = $request->email;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->save();
                return view('welcome');
            }
        } else {
            return "Please check your email.You have to be a valid user";
        }
    }
}
