<!-- ...EDITAR USUÁRIO....-->

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
    alert('Usuário alterado com sucesso');
    
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
                <div class="card card-register mx-auto mt-5" style="font-size: larger">
                    <div class="card-header" style="font-size: x-large" >Editar usuário : {{$usuario->nome}}</div>
                    <div class="card-body">
                        <form id="update" method="post" action="">
                            @csrf
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        
                                            <label for="nome">Nome</label>
                                            <input type="text" id="nome" name="nome" class="form-control" value="{{$usuario->nome}}"required="required" autofocus="autofocus">
                                     
                                    </div>                                  
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                         <label for="senha">Senha</label>
                                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required="required">
                                          
                                    </div>
                                    <div class="col-md-6">
                                        
                                            <label for="senha2">Confirme a senha</label>
                                            <input type="password" id="senha2" name="senha"class="form-control" placeholder="Confirm password" required="required">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a  onclick="return update('{{route('usuario.update', $usuario->codUsuario)}}')" class="btn btn-danger" href="{{route('usuario.index')}}">Salvar alterações</a>
                        </form>
                       
                    </div>
                </div>
            </div>
@stop