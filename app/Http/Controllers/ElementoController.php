<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('elemento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('elemento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nomeElemento = $request->get('nomeElemento');
        $qtdVezes = $request->get('qtdVezes');
        $concessoes = $request->get('concessoes');
        $interferencia = $request->get('interferencia');
        $ritmo = $request->get('ritmo');
        $porPeca = $request->get('porPeca');

        foreach ($nomeElemento as $index => $nome) {
            $elemento = new \App\Elemento();

            $elemento->codOperacao = 1;

            $elemento->nomeElemento = $nome;
            $elemento->ritmo = $ritmo[$index];
            $elemento->interferencia = $interferencia[$index];
            $elemento->concessoes = $concessoes[$index];
            $elemento->qtdVezes = $qtdVezes[$index];
            $elemento->porPeca = $porPeca[$index];
            $elemento->save();
            
        };
        return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view('elemento.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
