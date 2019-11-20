@extends('layout')

@section('conteudo')
<div class="text-center" > 
            
            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header" style="font-size: x-large">Registrar uma Conta</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="nome">Nome</label>
                                            <input type="text" id="nome" class="form-control" placeholder="digite o nome" required="required" autofocus="autofocus">                                  
                                    </div></br>                                   
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
                                            <input type="password" id="confirmPassword" class="form-control" placeholder="confirme a senha" required="required">
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