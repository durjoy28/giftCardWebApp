<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NodeController extends Controller
{
    
    public function node($id)
    {
        switch ($id){
            case 2:
                return view('node.2');
                break;

            case 3:
                return view('node.3');
                break;

            case 4:
                return view('node.4');
                break;

            case 5:
                return view('node.5');
                break;

            case 6:
                return view('node.6');
                break;

            case 7:
                return view('node.7');
                break;

            case 8:
                return view('node.8');
                break;
        }
    }
}
