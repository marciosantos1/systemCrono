<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacaoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $operacao = \App\Operacao::get();

        return view('operacao.index', compact('operacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $produto = \App\Produto::get();
        return view('operacao.create', compact('produto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $operacao = new \App\Operacao();
        $operacao->nomeOperacao = $request->get('nomeOperacao');
        $operacao->codProduto = $request->get('codProduto');
        $operacao->maquina = $request->get('maquina');
        $operacao->tipoEstudo = $request->get('tipoEstudo');
        $operacao->cronometrista = $request->get('cronometrista');
        $operacao->save();
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
        $operacao = \App\Operacao::find($id);
        $produto = \App\Produto::get();

        return view('operacao.edit', compact('operacao', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $operacao = \App\Operacao::find($id);
        $operacao->nomeOperacao = $request->get('nomeOperacao');
        $operacao->codProduto = $request->get('codProduto');
        $operacao->maquina = $request->get('maquina');
        $operacao->tipoEstudo = $request->get('tipoEstudo');
        $operacao->cronometrista = $request->get('cronometrista');
        $operacao->save();
        return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $operacao = \App\Operacao::find($id);
        $operacao->delete();
        return "true";
    }

}
