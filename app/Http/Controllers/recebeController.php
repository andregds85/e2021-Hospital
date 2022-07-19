<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class recebeController  extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:Hospital-list|Hospital-create|Hospital-edit|Hospital-delete', ['only' => ['index','show']]);
         $this->middleware('permission:Hospital-create', ['only' => ['create','store']]);
         $this->middleware('permission:Hospital-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Hospital-delete', ['only' => ['destroy']]);
    }


    public function index($v1,$v2,$v3)
    {

     return view('recebe.index',['v1'=>$v1,'v2'=>$v2,'v3'=>$v3]);

   
 
    }

    
}

