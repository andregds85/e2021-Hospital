@extends('limpo.app')
@section('content')
<?php 
$id;
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
                            <label for="idp3" class="col-md-4 col-form-label text-md-right">{{ __('ID do Mapa ') }}</label>
                            <div class="col-md-6">
                            <input id="idp3" type="text" class="form-control @error('idp3') is-invalid @enderror" name="idp3"  value="<?php echo $id; ?>" required autocomplete="idp3" readonly>
                                @error('idp3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>           

             


                 <!-- prontuarioHospital -->
                     <div class="form-group row">
                            <label for="prontuarioHospital" class="col-md-4 col-form-label text-md-right">{{ __('ID do Mapa ') }}</label>
                            <div class="col-md-6">
                            <input id="prontuarioHospital" type="text" class="form-control @error('idp3') is-invalid @enderror" name="prontuarioHospital"  value="<?php echo $id; ?>" required autocomplete="prontuarioHospital" >
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
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Observação do Hospital') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" name="obsHospital" id="obsHospital">
                              <option value='confirmado' >confirmado</option>
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
                              <option value='confirmado' >confirmado</option>
                              </select>     
                                @error('realizou')
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