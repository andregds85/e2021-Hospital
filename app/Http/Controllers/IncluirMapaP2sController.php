<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\incluir_mapa_p2;
use App\Models\Pacientes;


class IncluirMapaP2sController extends Controller
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
        return view('IncluirMapaP2s.index');
    }
   
    public function create()
    {
        return view('IncluirMapaP2s.create');
    }
     public function store(Request $request)
    {
            request()->validate([
            'idPaciente' => 'required',
            'codSolicitacao' => 'required',
            'cns' => 'required',
            'nomeUsuario' => 'required',
            'municipio' => 'required',
        ]);

       incluir_mapa_p2::create($request->all());
       Pacientes::where('id','idPaciente')->update(['statusSolicitacao' => 'S']);   
       return redirect()->route('mapasReg.index')
                        ->with('Sucesso','Paciente Incluido no Mapa com Sucesso.');
    }
    
}





