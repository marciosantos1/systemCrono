window.onload = function () {
    visor = document.getElementById("reloj"); //localizar pantalla del reloj
    //asociar eventos a botones: al pulsar el botón se activa su función.
    document.cron.empieza.onclick = empezar;
    document.cron.para.onclick = parar;
    document.cron.continua.onclick = continuar;
    document.cron.reinicia.onclick = reiniciar;
    document.cron.proximo.onclick = capturarTempo;
    
    // OBTÉM A TOMADA DE TEMPO E OS ELEMENTOS.
    getTomadaTempo(1);
    getElemento(1);
}
//variables de inicio:
var marcha = 0; //control del temporizador
var cro = 0; //estado inicial del cronómetro.
//cronometro en marcha. Empezar en 0:
function empezar() {
    if (marcha == 0) { //solo si el cronómetro esta parado
        emp = new Date() //fecha actual
        elcrono = setInterval(tiempo, 10); //función del temporizador.
        marcha = 1 //indicamos que se ha puesto en marcha.
    }
}
function tiempo() { //función del temporizador
    actual = new Date() //fecha en el instante
    cro = actual - emp //tiempo transcurrido en milisegundos
    cr = new Date() //fecha donde guardamos el tiempo transcurrido
    cr.setTime(cro)
    cs = cr.getMilliseconds() //milisegundos del cronómetro
    cs = cs / 10; //paso a centésimas de segundo.
    cs = Math.round(cs)
    sg = cr.getSeconds(); //segundos del cronómetro
    mn = cr.getMinutes(); //minutos del cronómetro
    
    if (cs < 10) {
        cs = "0" + cs;
    }  //poner siempre 2 cifras en los números
    if (sg < 10) {
        sg = "0" + sg;
    }
    if (mn < 10) {
        mn = "0" + mn;
    }
    visor.innerHTML =  mn + " : " + sg + " : " + cs; //pasar a pantalla.
}
//parar el cronómetro
function parar() {
    if (marcha == 1) { //sólo si está en funcionamiento
        clearInterval(elcrono); //parar el crono
        marcha = 0; //indicar que está parado.
    }
}
//Continuar una cuenta empezada y parada.
function continuar() {
    if (marcha == 0) { //sólo si el crono está parado
        emp2 = new Date(); //fecha actual
        emp2 = emp2.getTime(); //pasar a tiempo Unix
        emp3 = emp2 - cro; //restar tiempo anterior
        emp = new Date(); //nueva fecha inicial para pasar al temporizador 
        emp.setTime(emp3); //datos para nueva fecha inicial.
        elcrono = setInterval(tiempo, 10); //activar temporizador
        marcha = 1;
    }
}
//Volver al estado inicial
function reiniciar() {
    if (marcha == 1) { //si el cronómetro está en marcha:
        clearInterval(elcrono); //parar el crono
        marcha = 0;	//indicar que está parado
    }
    cro = 0; //tiempo transcurrido a cero
    visor.innerHTML = "00 : 00 : 00"; //visor a cero
}
var contadorCaptura = 0;
var contadorElemento = 0;
  function capturarTempo(){
    if(contadorElemento == elementos.length){
        contadorElemento = 0;
    }
    parar();
    tempoCapturado = $('#reloj').html();
    contadorCaptura++;
    reiniciar();
    empezar();
    
    elemento = elementos[contadorElemento];
    
    // cria uma nova linha na tabela.
    linha = "<tr>\n\
             <td>"+ contadorCaptura +"</td>\n\
             <td>"+ elemento.nomeElemento +"</td>\n\
             <td>"+ tempoCapturado +"</td>\n\
             </th>";
     //Plota na tabela
     $('#corpoTabela').append(linha);
    
    //Enviar via Ajax.
    console.log("Cronômetro "+contadorCaptura+":  "+tempoCapturado);
    registrarTempo(contadorCaptura,tomadaTempo.codTomadaDeTempo, elemento.codElemento, tempoCapturado);
    
    contadorElemento++;
    
    //Encerra o cronômetro
    if(contadorCaptura>= (elementos.length * tomadaTempo.numLeitura)){
        parar();
        $('#proximo').attr('disabled', 'true');
        
    }
    
}
function registrarTempo(numCronometragem, codTomadaDeTempo, codElemento, tempo){
  
  $.ajax({
    method: 'get',
    url: '/cronometragem/guardar',
    data: 'numCronometragem='+numCronometragem+'&codTomadaDeTempo='+codTomadaDeTempo+'&codElemento='+codElemento+'&tempo='+tempo+'',
    dataType: 'json',
    success: function (data){
    //mensagem sucesso
    console.log('Leitura armazenada - '+numCronometragem);
    
    },
    error: function(argument){
    //mensagem erro
    alert('Falha ao obter dados');
    }
    });
    
}

var tomadaTempo = null;
function getTomadaTempo(codTomadaTempo){
    
    $.ajax({
    method: 'get',
    url: '/cronometragem/get-tomada-tempo',
    data: 'cod='+codTomadaTempo,
    dataType: 'json',
    success: function (data){
    //mensagem sucesso
    tomadaTempo = data;
    
    },
    error: function(argument){
    //mensagem erro
    alert('Falha ao obter dados');
    }
    });
   
    }
    var elementos = null;
    function getElemento(codOperacao){
    
    $.ajax({
    method: 'get',
    url: '/cronometragem/get-elemento',
    data: 'cod='+codOperacao,
    dataType: 'json',
    success: function (data){
    //mensagem sucesso
    elementos = data;
    
    },
    error: function(argument){
    //mensagem erro
    alert('Falha ao obter dados');
    }
    });
   
    }
    

