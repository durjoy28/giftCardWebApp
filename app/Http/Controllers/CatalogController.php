<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{
    public function catalog($id)
    {


        switch ($id){
            case 8:
                return view('catalog.8');
            break;

            case 9:
                return view('catalog.9');
                break;

            case 10:
                return view('catalog.10');
                break;

            case 11:
                return view('catalog.11');
                break;

        }

    }
}
