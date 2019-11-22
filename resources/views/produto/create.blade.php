@extends('layout')

@section('conteudo')
<script>
    function createProduto(url){

    dados = $('#create').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data){
            //mensagem socesso
            alert('Produto cadastrado com socesso');
            },
            error: function (argument){
            //mensagem erro
            alert('erro');
            }

    });
    return false;
    }
</script>

<div id="content-wrapper">

    <div class="text-center">
        <h1>Cadastrar novo produto</h1>
    </div>
    <div class="container my-auto">

        <form id="create" method="post" action=""> 
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Nome</label>
                <input id="nomeProduto" class="form-control">
            </div></br>


        </form> 

        <div class="container my-auto">
            <a class="btn btn-warning"  href="">Cancelar</a>
            <a href="" onclick="return createProduto('{{route('produto.store')}}')" class="btn btn-danger">Cadastrar</a>

        </div>
    </div>                     


</div>

@stop