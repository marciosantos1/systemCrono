
<!-- ...EDITAR PRODUTOS....-->

@extends('layout')

@section('conteudo')

<script>

    function update(url){
    dados = $('#update').serialize();
    $.ajax({
    method: 'put',
    url: url,
    data: dados,
    dataType: 'html',
    success: function (data){
    //mensagem sucesso
    alert('Produto alterado com sucesso');

    },
    error: function (argument){
    //mensagem erro
    alert('Erro');
    }

    });
    return href="{{route('produto.index')}}";
    }
</script>


<div id="content-wrapper">
    <div class="text-center">

        <h1>Editar produto: {{$produto->nomeProduto}}</h1>
    </div>
    <div class="container my-auto">
        <form id="update" method="post" action="{{route('produto.update', $produto->codProduto)}}"> 
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Código: {{$produto->codProduto}}</label>

            </div>
            <div class="form-group">
                <label for="nomeProduto" >Nome</label>
                <input id="nomeProduto" name="nomeProduto" value="{{$produto->nomeProduto}}" class="form-control">
            </div>
        </form>
        <a  onclick="return update('{{route('produto.update', $produto->codProduto)}}')" class="btn btn-danger"href="{{route('produto.index')}}">Salvar Alteraçoes</a>
        <a class="btn btn-warning"  href="{{route('produto.index')}}">Cancelar</a>
    </div>
    @stop