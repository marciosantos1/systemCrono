
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
            //mensagem socesso
            alert('Produto alterado com socesso');
            location.href = '{{route('produto.index')}}';
            },
            error: function (argument){
            //mensagem erro
            alert('Erro');
            }

    });
    return false;
    }
</script>


<div id="content-wrapper">
    <div class="text-center">
        
        <h1>Editar produto: {{$produto->nomeProduto}}</h1>
    </div>
    <div class="container my-auto">
        <form id="update" method="post" action=""> 
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Código: {{$produto->codProduto}}</label>
               
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Nome</label>
                <input id="nomeProduto" name="nomeProduto" value="{{$produto->nomeProduto}}" class="form-control">
            </div>
        </form>
        <a href="" onclick="return update('{{route('produto.update', $produto->codProduto)}}')" class="btn btn-danger">Salvar Alteraçoes</a>
        <a class="btn btn-warning"  href="">Cancelar</a>
    </div>
    @stop