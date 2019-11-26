<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = \App\Usuario::get();
        return view('usuario.index', compact('usuario'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('usuario.create');
       
    }
   
    
    public function store(Request $request)
    {
       $usuario = new \App\Usuario();
       $usuario->nome = $request->get('nome');
       $usuario->senha = $request->get('senha');
       $usuario->save();
       return "true";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = \App\Usuario::find($id);
        
        return view('usuario.edit',compact('usuario'));
    }
    
   
    public function update(Request $request, $id)
    {
         $usuario = \App\Usuario::find($id);
         $usuario->nome = $request->get('nome');
         $usuario->senha = $request->get('senha');
         $usuario->save();
         return "true";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $usuario = \App\Usuario::find($id);
         $usuario->delete();
         return "true";
         
         
         
    }
}