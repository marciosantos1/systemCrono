<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller {

    public function index() {
        return view('cronometragem.index');
    }

    public function getTomadaTempo() {
        $codTomadaTempo = $_GET ['cod'];
        $tomada = \App\TomadaDeTempo::where('codTomadaDeTempo', '=', $codTomadaTempo)->get();
        return $tomada[0];
    }

    public function getElementos() {
        $codOperacao = $_GET ['cod'];
        $elemento = \App\Elemento::where('codOperacao', '=', $codOperacao)->get();
        return $elemento;
    }

    public function guardar() {
        $cronometragem = new \App\Cronometragem();
        //numero leitura
        $cronometragem->numCronometragem = $_GET['numCronometragem'];
        //codigo da tomada de tempo
        $cronometragem->codTomadaDeTempo = $_GET['codTomadaDeTempo'];
        //codigo elemento
        $cronometragem->codElemento = $_GET['codElemento'];
        //normatizaçao de dados
        $tempo = $request-$_GET['tempo'];
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->tempo = $tempo;
        //Salva a cronometragem
        $cronometragem->save();
        
        return true;
    }

}
