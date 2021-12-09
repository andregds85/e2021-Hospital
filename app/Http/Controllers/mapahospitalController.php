<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mapahospitalController extends Controller
{
  function __construct()
  {
       $this->middleware('permission:Hospital-list|Hospital-create|Hospital-edit|Hospital-delete', ['only' => ['index','show']]);
       $this->middleware('permission:Hospital-create', ['only' => ['create','store']]);
       $this->middleware('permission:Hospital-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:Hospital-delete', ['only' => ['destroy']]);
  }
    public function index()
    {
       return view('mapaHosp.index');

    }

    /*
    public function show($id){
       return view('municipio.mapasFull',['id'=>$id]); 
     }

    */




    }