<?php 
use App\Models\mapas;
use App\Http\Controllers\MapasController;
use App\Http\Controllers\mapahospitalController;
use App\Http\Controllers\PacienteController;

use App\Models\incluir_mapa_p2;
use App\Models\mapahospital;
use App\Models\Pacientes;


$tabela = mapas::all(); 
$itensP = mapas::where('id',$id)->get(); 


$tabelap2 = incluir_mapa_p2::all(); 
$itensP2 =  incluir_mapa_p2::where('idMapa',$id)->get(); 


$tab=$tabela = pacientes::all(); 

?>


<?php $hospUsr=Auth::user()->categorias_id; ?> 


<form>
   <input type="button" value="Imprimir" onClick="window.print()" />
</form>

    @foreach ($itensP  as $t)

    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
<body>
<table class="table table-bordered">
  <tbody>
    <tr>
    <td>
    <img src="http://www.cerintersc.com.br/content/img/logo.png" width="100" height="100"> 
</td>
      <td align="center"><b>
      <br>Estado de Santa Catarina
      <br>Secretaria de Estado da Saúde 
      <br>Cirurgias Eletivas <br>
      Dados do Mapa </b>
     </td>
     </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b> Mapa criado pelo hospital</b></td>
       
    </tr>
  </tbody>
</table>


  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Id do Mapa:</b>{{$t->id }} <br>
          <b>Macro:</b>{{$t->macro }}<br>
           <b>Hospital: </b> {{$t->categoria_id }}<br>

           <?php $hosptb=$t->categoria_id; ?>
           <?php $hospUsr=Auth::user()->categorias_id; 
           
                  if($hosptb==$hospUsr){


                  }else{
                   session()->flush();

                  }
        
          
           
           ?> 


           <b>Nome do Mapa:</b>{{$t->nome }}<br>
           <b>Descrição:</b>{{$t->descricao }}<br>
     <b>Especialidade: </b> {{$t->especialidade }}<br>
     </td>
     <td>
   
    <b> Código do Procedimento: </b> {{$t->cod_procedimento}}<br>
    <b> Procedimento:</b> {{$t->procedimento}}<br>
    <b> Vagas:</b> {{$t->vagas}}<br>
    <b> Criado em :</b> {{$t->created_at}}<br>
    <b> Autalizado em :</b> {{$t->updated_at}}<br>
   
  </td>
    </tr>
  </tbody>
</table>


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b> Pacientes inseridos no mapa</b></td>
       
    </tr>
  </tbody>
</table>


@foreach ($itensP2  as $t2)



<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b> Paciente Inserido</b></td>

       </tr>
  </tbody>
</table>



<table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Id do Mapa:</b>{{$t2->idMapa }} <br>

           <b>Id do Paciente:</b>{{$t2->idPaciente }}<br>

          <?php

        
          $pacid = pacientes::where('id',$t2->idPaciente)->get(); 
            
         ?>           


            @foreach ($pacid  as $t3)
    
              
           <b>Código da Solicitação: </b> {{$t3->solicitacao }}<br>
           <b>CNS:</b>{{$t3->cns }}<br>
           <b>Municipio:</b>{{$t3->municipio }}<br>
     <b>Nome: </b> {{$t3->nomedousuario }}<br>
     </td>
     <td>
   
    <b> Macro:</b> {{$t->macro}}<br>


<?php 
$v1=$t2->idPaciente;
$v2=$t2->idMapa;
$v3=$t2->id;

?>

    <?php 

      $tabelap3 = mapahospital::all();              
echo  $itensP = mapahospital::where('idp3',$t2->id)->count();
       

   if ($itensP==0) { ?>
                   

<a class="btn btn-info" href="{{ url('recebe', ['v1' =>Crypt::encrypt($v1), 'v2' => Crypt::encrypt($v2),'v3' => Crypt::encrypt($v3)]) }}">Inserir Complemento no Mapa</a>



    <!--
    <a class="btn btn-info" href="{{ url('mapahosp',base64_encode($t2->id))}}">Inserir Complemento no Mapa</a>              
   -->
    <?php  } ?>

    
  </td>
    </tr>
  </tbody>
</table>

@endforeach

@endforeach




      <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

    @endforeach   


 

    </html>










 