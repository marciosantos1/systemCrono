@extends('layout')

@section('conteudo')
<script>
    function createUsuario(url){
    dados = $('#create').serialize();
    $.ajax({
    method: 'post',
    url: url,
    data: dados,
    dataType: 'html',
    success: function (data){
    //mensagem sucesso
    alert('Usuário cadastrado com sucesso')
    },
    error: function (argument){
    //mensagem erro
    alert('Erro');
    }
    });
    return href="{{route('usuario.index')}}";
    }
</script>

<div class="text-center" > 

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header" style="font-size: x-large">Registrar uma Conta</div>
            <div class="card-body">
                <form id="create" method="post" action="">
                     @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="digite o nome" required="required" autofocus="autofocus">                                  
                            </div></br>                                   
                        </div>
                    </div>                           
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required="required">
                                    <label for="senha">Senha</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="senha2" name="senha" class="form-control" placeholder="confirme a senha" required="required">
                                    <label for="senha2">Confirme a senha</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a onclick="return createUsuario('{{route('usuario.store')}}')" class="btn btn-primary" href="{{route('usuario.index')}}">Salvar</a>
                </form>                      
            </div>
        </div>
    </div>
    @stop