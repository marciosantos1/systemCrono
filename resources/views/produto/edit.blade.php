
@extends('layout')

@section('conteudo')


<!-- Cadatro de novo produto-->
<div id="content-wrapper">
    <div class="text-center">
        <h1>Editar produto</h1>
    </div>
    <div class="container my-auto">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Código</label>
                <input  class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nome</label>
                <input class="form-control">
            </div>
        </form>
        <a class="btn btn-primary"  href="">Salvar alteração</a>
        <a class="btn btn-warning"  href="">Cancelar</a>
    </div>
    @stop