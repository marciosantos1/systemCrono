@extends('layout')

@section('conteudo')
    <div class="text-center" > 
            
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header" style="font-size: x-large">Login</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                    <label for="inputEmail">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Senha</label>
                                </div>
                            </div>
                            
                            <a class="btn btn-primary btn-block" href="index.html">Login</a>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="register.html">Registrar-se Aqui</a>                           
                        </div>
                    </div>
                </div>
            </div>

@stop