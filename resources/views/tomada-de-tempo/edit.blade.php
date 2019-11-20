@extends('layout')

@section('conteudo')
<div id="content-wrapper">

    &nbsp;&nbsp;

    <center>
        <div id="cronometro">
            
            <div style="font-size: large">Editar Tomada de tempo</div>
            
        </div>

        </br></br>
        <table width="60%" border="4">
            <thead>                  
            <td>Nº Cronômetro</td>
            <td>Elemento</td>
            <td>Tempo</td>

            </thead>
            <tbody id="corpoTabela"></tbody>
        </table>
    </center>

</div>
@stop
