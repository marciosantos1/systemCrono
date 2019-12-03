<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller {

    public function index() {
        return view('/cronometragem.index');
    }

    public function getTomadaTempo() {
        $codigoTomadaTempo = $_GET['cod'];
        $tomada = \App\TomadaDeTempo::where('codTomadaDeTempo', '=', $codigoTomadaTempo)->get();
        return $tomada[0];
    }

    public function getElemento() {
        $codigoOperacao = $_GET['cod'];
        $elemento = \App\Elementos::where('codOperacao', '=', $codigoOperacao)->get();
        return $elemento;
    }

    public function guardar(Request $request) {
        $cronometragem = new \App\Cronometragem();

        //num leitura
        $cronometragem->numCronometragem = $request->get('numCronometragem');

        //cod tomadatempo
        $cronometragem->codTomadaDeTempo = $request->get('codTomadaDeTempo');

        // cod elemento
        $cronometragem->codElemento = $request->get('codElemento');

        // tempo - normalização de dados
        $tempo = $request->get('tempo');
        $tempo = str_replace('', '', $tempo);
        $cronometragem->tempo = $tempo;

        // salva a cronometragem
        $cronometragem->save();
        return true;
    }

}
