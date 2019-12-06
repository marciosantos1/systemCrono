@extends('layout')

@section('conteudo')

<script>
window.onload = function () {
    visor = document.getElementById("reloj"); //localizar pantalla del reloj
    //asociar eventos a botones: al pulsar el botón se activa su función.
    document.cron.empieza.onclick = empezar;
    document.cron.para.onclick = parar;
    document.cron.continua.onclick = continuar;
    document.cron.reinicia.onclick = reiniciar;
    document.cron.proximo.onclick = capturarTempo;


    //ira receber uma variavel
    //Obtem a tomada de tempo e os elementos
    getTomadaTempo(1);
    getElementos(1);

}
</script>
<div id="content-wrapper">

    &nbsp;&nbsp;

    <center>
        <div id="cronometro">

            <div id="reloj">00 : 00 : 00</div>
            <form name="cron" action="#">
                <input type="button" value="Iniciar" name="empieza" />
                <input type="button" value="Parar" name="para" /><br/>
                <input type="button" value="Continuar" name="continua" />
                <input type="button" value="Reiniciar" name="reinicia" />               
                </br></br>
                <input style="background-color: #17a2b8" type="button"  value="Próximo >>" name="proximo" id="proximo" />               
            </form>


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