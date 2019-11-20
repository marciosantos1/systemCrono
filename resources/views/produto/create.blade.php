
<!-- ...CADASTRAR PRODUTOS....-->

@extends('layout')

@section('conteudo')
<div id="content-wrapper">

    <div class="text-center">
        <h1>Cadastrar novo produto</h1>
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
            </div></br>
            <div class="container my-auto">
                <a class="btn btn-primary"  href=" ">Cadastrar</a>
                <a class="btn btn-warning"  href=" ">Cancelar</a>

            </div>
        </form>
    </div>                     


</div>

@stop