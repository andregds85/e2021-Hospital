<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PacienteController;
use App\Models\Categoria;
use App\Models\Hospital;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
         $hospital = Hospital::orderby('id', 'asc')->paginate();
         return view('hospital.index',['itens' => $hospital]);
    }

    public function store(Request $request)
    {

    }
   
    public function show($id){
     return view('hospital.vizualiza',['id'=>$id]);
    }

    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {

    }
    public function id($id){
        return  $id;
    }


}
