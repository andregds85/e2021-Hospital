@extends('limpo.app')
@section('content')
<?php session_start(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recebe os Dados ') }}</div>


                

                <?php
                echo "ID do Paciente :";
                $dv1=Crypt::decrypt($v1);    
                echo $dv1;
                $_SESSION['v1'] = $dv1;
                echo "<br>";


                echo "ID do Mapa :";    
                $dv2=Crypt::decrypt($v2);    
                echo $dv2;
                $_SESSION['v2'] = $dv2;
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "Daqui ir para view MAPAHOSP E VAI DAR ERRO POR CAUSA DO ID";
                echo "<br>";
                echo "<br>";
                echo "Procurar e a url Mapa Hosp ";
                echo "mapahosp";
                echo "<br>";
                echo "<br>";
                echo "OBS PARA FAZER AGORA APARTIR DAQUI GRAVAR OS DOIS ID EM SEÇÃO E APLICAR CRIPTOGRAFIA";
     
                echo redirect()->route('mapahosp.index');

                ?>






            </div>
        </div>
    </div>
</div>





   
   
  








@endsection
