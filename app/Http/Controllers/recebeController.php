<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class recebeController  extends Controller
{
    
    public function index($v1,$v2)
    {

     return view('recebe.index',['v1'=>$v1,'v2'=>$v2]);

     
 
    }

    
}

