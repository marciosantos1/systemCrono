
<!-- ...CADASTRAR PRODUTOS....-->

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
    //mensagem sucesso
    alert('Produto cadastrado com sucesso')
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
        <h1>Cadastrar novo produto</h1>
    </div>
    <div class="container my-auto">

        <form id="create" method="post" action=""> 
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome</label>
                <input id="nomeProduto" name="nomeProduto" class="form-control">
            </div></br>


        </form> 

        <div class="container my-auto">
            <a class="btn btn-warning"  href="{{route('produto.create')}}">Cancelar</a>
            <a onclick="return createProduto('{{route('produto.store')}}')" class="btn btn-danger" href="{{route('produto.index')}}">Cadastrar</a>

        </div>
    </div>                     


</div>

@stop