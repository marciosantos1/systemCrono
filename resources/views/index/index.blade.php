
<!-- ...TELA PRINCIPAL....-->

@extends('layout')

@section('conteudo')

<script>  
     function mostrarMenu(){          
          
               $("#pagesDropdown").show();
                         
       }
              </script>
              <style>
                  
                  #pagesDropdown{
                  
                     display: none;
                  }
                  #login{
                      display:1;
                  }
              </style>
              <div class="text-center" id="login" > 
            
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
                            
                            <a onclick="return mostrarMenu() "class="btn btn-primary btn-block" >Login</a>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="{{url('/')}}/usuario/create">Registrar-se Aqui</a>                           
                        </div>
                    </div>
                </div>
            </div>
                  </div>
                  
@stop