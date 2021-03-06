@extends('limpo.app')
@section('content')
<?php 
session_start();

echo "ID do Paciente :";
echo $idP=$_SESSION['v1'];
echo "<br>";

echo "ID do Mapa :";
echo $idM=$_SESSION['v2'];
echo "<br>";


echo "ID da Etapa :";
echo $idE=$_SESSION['v3'];
echo "<br>";


use App\Models\mapahospital;
use App\Http\Controllers\mapahospitalController;

$tabelap3 = mapahospital::all();              
$itensP = mapahospital::where('idp3',$idM)->count();
       

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Finalizando Mapa  ') }}</div>

                <div class="card-body">
                <form action="{{ route('mapahosp.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
                        @csrf
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                       
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">


                  <!-- idP3 -->
                     <div class="form-group row">
                            <label for="idp3" class="col-md-4 col-form-label text-md-right">{{ __('ID da Etapa ') }}</label>
                            <div class="col-md-6">
                            <input id="idp3" type="text" class="form-control @error('idp3') is-invalid @enderror" name="idp3"  value="<?php   echo  $idE;    ?>" required autocomplete="idp3" readonly>
                                @error('idp3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>           

             
                 <!-- prontuarioHospital -->
                     <div class="form-group row">
                            <label for="prontuarioHospital" class="col-md-4 col-form-label text-md-right">{{ __('N??mero do Prontuario Hospital ') }}</label>
                            <div class="col-md-6">
                            <input id="prontuarioHospital" type="text" class="form-control @error('idp3') is-invalid @enderror" name="prontuarioHospital"  value="" required autocomplete="prontuarioHospital" >
                                @error('prontuarioHospital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>           

 


                     <!--  Data prevista para cirurgia  -->
                       <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Data prevista para Cirurgia') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('dataCirurgia') is-invalid @enderror" name="dataCirurgia"  required autocomplete="dataCirurgia" rows="3"></textarea>
                                @error('dataCirurgia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           </div>

       

                                          
                    <!--  obsHospital -->
                    <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Observa????o do Hospital') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" name="obsHospital" id="obsHospital">
                            <option value='' ></option>

                              <option value='1. Aguarda cirurgia' >1. Aguarda cirurgia</option>
                              <option value='2. J?? realizou no SUS' >2. J?? realizou no SUS</option>
                              <option value='3. J?? realizou particular' >3. J?? realizou particular</option>
                              <option value='4. N??o deseja mais realizar'> 4. N??o deseja mais realizar</option>
                              <option value='5. Contra-indicado o procedimento'> 5. Contra-indicado o procedimento</option>
                              <option value='6. Sem contato'> 6. Sem contato</option>
                              <option value='7. N??o localizado'> 7. N??o localizado</option>
                              <option value='8. ??bito'> 8. ??bito</option>
                              <option value='9. Termo de desist??ncia assinado'> 9. Termo de desist??ncia assinado</option>
                              <option value='10. Paciente com indica????o de UTI'> 10. Paciente com indica????o de UTI</option>
                              <option value='11. Paciente aguardando avalia????o de outra especialidade'> 11. Paciente aguardando avalia????o de outra especialidade</option>
                              <option value='12. Paciente n??o compareceu na data agendada da cirurgia'> 12. Paciente n??o compareceu na data agendada da cirurgia</option>
               
                           
                           
                           
                            </select>     
                                @error('obsHospital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           </div>
         
                         
                         
                           
                   <!--  realizou -->
                    <div class="form-group row">
                            <label for="realizou" class="col-md-4 col-form-label text-md-right">{{ __('Realizou ') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" name="realizou" id="realizou">
                            <option value='' ></option>
                              <option value='Sim' >Sim</option>
                              <option value='N??o' >N??o</option>
                         
                            </select>     
                                @error('realizou')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           </div>


                 
                   <!-- idMapa -->
                     <div class="form-group row">
                            <label for="idMapa" class="col-md-4 col-form-label text-md-right">{{ __('ID do Mapa ') }}</label>
                            <div class="col-md-6">
                            <input id="idMapa" type="text" class="form-control @error('idMapa') is-invalid @enderror" name="idMapa"  value="<?php   echo  $idM;    ?>" required autocomplete="idMapa" readonly>
                                @error('idMapa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>        



                        <!-- Id Paciente -->
                          <div class="form-group row">
                            <label for="idPaciente" class="col-md-4 col-form-label text-md-right">{{ __('ID do Paciente ') }}</label>
                            <div class="col-md-6">
                            <input id="idPaciente" type="text" class="form-control @error('idPaciente') is-invalid @enderror" name="idPaciente"  value="<?php   echo  $idP;    ?>" required autocomplete="idPaciente" readonly>
                                @error('idPaciente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>        









                    <!-- usuario -->
                    <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario ') }}</label>
                            <div class="col-md-6">
                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario"  value="<?php echo $userMacro=Auth::user()->email; ?>" required autocomplete="usuario" readonly>
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>

                 

<!--  fim -->
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection