
@extends('layout')

@section('conteudo')


<script>
    function delProduto(id, url){
        confirma = confirm("deseja realmente eliminar o produto");
        
        if(confirma){
        dados = $('#'+id).serialize();
        $.ajax({
            method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data){
                //mensagem socesso
                $('#linha'+id).remove();
            },
            error: function (argument){
                //mensagem erro
                alert('Falha ao eliminar produto');
            }
            
        });
    }
        return false;
    }
    </script>

<div id="content-wrapper">
    <div class="text-center">
        <h1>Editar produto</h1>
    </div>
    <div class="container my-auto">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Código</label>
                <input id="codProduto" class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nome</label>
                <input id="nomeProduto" class="form-control">
            </div>
        </form>
        <a href="" onclick="return delProduto('edit{{#nomeProduto}}', '{{route('produto.edit', $p->codProduto)}}')" class="btn btn-danger">Salvar alteraçã</a>
                            <form action="" method="post" id="del{{$p->codProduto}}">
                                @csrf
                                @method('DELETE')
                            </form>
        <a class="btn btn-primary"  href="">Salvar alteração</a>
        <a class="btn btn-warning"  href="">Cancelar</a>
    </div>
    @stop