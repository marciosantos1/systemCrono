@extends('layout')

@section('conteudo')
<div id="content-wrapper">

    &nbsp;&nbsp;

    <center>
                 
            <div style="font-size: large">Listagem Tomada de tempo</div>
            
        </br></br>
        <table width="60%" border="4">
            <thead>                  
            <td>Nº Cronômetro</td>
            <td>Elemento</td>
            <td>Tempo</td>
            <td>Opções</td>
            
            </thead>
          <tbody id="corpoTabela">
              <th><a href="{{url('/')}}/tomada-tempo/1/edit" class="btn btn-primary"> + </a></th>                   
        </tbody>
        </table></br></br>
        <th><a href="{{url('/')}}/tomada-tempo/create" class="btn btn-success">Iniciar nova tomada de tempo?</a></th>
    </center>

</div>
@stop
