<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sales_silver;
use App\sales_gold;
use App\sales_platinum;
use App\User;

class DashboardController extends Controller
{
    public function index(){

        $sales_silver_s=sales_silver::all();
        $sales_gold=sales_gold::all();
        $sales_platinum=sales_platinum::all();
        //return view('dashboard',compact('sales_silver_s'));
        return view('dashboard')->with(array("sales_silver_s"=>$sales_silver_s,"sales_gold"=>$sales_gold,"sales_platinum"=>$sales_platinum));
    }
    
    // public function indexo(){

    //     $sales_gold=sales_gold::all();
    //     return view('dashboard',compact('sales_gold'));
    //     //return view('dashboard')->with(array("sales_silver_s"=>$sales_silver_s));
    // }

    // public function indext(){

    //     $sales_platinum=sales_platinum::all();
    //     return view('dashboard',compact('sales_platinum'));
    //     //return view('dashboard')->with(array("sales_silver_s"=>$sales_silver_s));
    // }

}
