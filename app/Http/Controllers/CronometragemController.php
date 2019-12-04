<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
    public function index()
    {
        return view('cronometragem.index');
    }
    
    public function getTomadaTempo(){
        $codigTomadaTempo = $_GET ['cod'];
        $tomada = \App\TomadaDeTempo::where('codTomadaDeTempo','=', $codigTomadaTempo)->get();
        return $tomada[0];
    }
    
    
}
