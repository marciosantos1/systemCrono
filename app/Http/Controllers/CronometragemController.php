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

    public function guardar(Request $request) {
        $cronometragem = new \App\Cronometragem();
        //numero leitura
        $cronometragem->numCronometragem = $request->get('numCronometragem');
        //codigo da tomada de tempo
        $cronometragem->codTomadaDeTempo = $request->get('codTomadaDeTempo');
        //codigo elemento
        $cronometragem->codElemento = $request->get('codElemento');
        //normatizaçao de dados
        $tempo = $request->get('tempo');
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->tempo = $tempo;
        //Salva a cronometragem
        $cronometragem->save();
        
        return true;
    }

}
