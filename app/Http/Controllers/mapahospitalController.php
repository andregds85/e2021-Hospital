<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mapahospital;


class mapahospitalController extends Controller
{
  function __construct()
  {
       $this->middleware('permission:Hospital-list|Hospital-create|Hospital-edit|Hospital-delete', ['only' => ['index','show']]);
       $this->middleware('permission:Hospital-create', ['only' => ['create','store']]);
       $this->middleware('permission:Hospital-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:Hospital-delete', ['only' => ['destroy']]);
  }

    public function show($id)
    {
         return view('mapaHosp.index',['id'=>$id]); 
     
    }


    public function store(Request $request)
    {
        request()->validate([
    
             ]);
 
             mapahospital::create($request->all());
             return redirect()->route();
 
          }
  



    }