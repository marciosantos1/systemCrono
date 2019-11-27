@extends('layout')

@section('conteudo')
<script>  
    
              </script>
    <div class="text-center" > 
            
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header" style="font-size: x-large">Login</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="nome " required="required" autofocus="autofocus">
                                    <label for="nome">Nome</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required="required">
                                    <label for="senha">Senha</label>
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