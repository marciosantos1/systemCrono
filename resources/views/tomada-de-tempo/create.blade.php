@extends('layout')

@section('conteudo')
<div id="content-wrapper">

    &nbsp;&nbsp;

    <center>
        <div id="cronometro">
            
            <div style="font-size: large">Cadastrar Tomada de tempo</div></br>
            <div id="reloj">00 : 00 : 00</div>
            <form name="cron" action="#">
                <input type="button" value="Iniciar" name="empieza" />
                <input type="button" value="Parar" name="para" /><br/>
                <input type="button" value="Continuar" name="continua" />
                <input type="button" value="Reiniciar" name="reinicia" />               
                </br></br>
                <input style="background-color: #17a2b8" type="button"  value="Próximo >>" name="proximo" />               
            </form>


        </div>

        </br></br>
        <table width="60%" border="4">
            <thead>                  
            <td>Nº Cronômetro</td>
            <td>Elemento</td>
            <td>Tempo</td>

            </thead>
            <tbody id="corpoTabela">
                
            </tbody>
        </table>
    </center>

</div>
@stop