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
                                    <input type="text" id="email" class="form-control" placeholder="Email " required="required" autofocus="autofocus">
                                    <label for="email">Nome</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Senha</label>
                                </div>
                            </div>
                            
                            <a class="btn btn-primary btn-block" href="{{url('/')}}">Login</a>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="{{url('/')}}/usuario/create">Registrar-se Aqui</a>                           
                        </div>
                    </div>
                </div>
            </div>

@stop