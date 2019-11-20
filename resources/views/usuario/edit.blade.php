@extends('layout')

@section('conteudo')
<div class="text-center" > 
            
    <div class="container">
                <div class="card card-register mx-auto mt-5" style="font-size: larger">
                    <div class="card-header" style="font-size: x-large">Editar usuário</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-label-group">
                                            <input type="text" id="firstName" class="form-control" placeholder="Primeiro nome" required="required" autofocus="autofocus">
                                            <label for="firstName">Nome</label>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required">
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                            <label for="confirmPassword">Confirme a senha</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-block" href="login.html">Salvar</a>
                        </form>
                       
                    </div>
                </div>
            </div>
@stop