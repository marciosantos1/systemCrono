@extends('layout')

@section('conteudo')



<script>
    function mostrarMenu() {
        $('#login').hide();
        $('#mensagem').show();
        $("#menus").show();

    }
</script>
<style>
    #mensagem{

        display:none;
    }
    #menus{

        display:none;
    }

</style>

<form id="mensagem" name="mensagem">          
    <div id="content-wrapper">

        &nbsp;&nbsp;

        <center>

            <h1 style="color: #389d70" >Bem vindo ao systemCrono</h1>
        </center>

    </div>
</form> 
<form id="login" name="login">

    <div class="text-center" id="login" > 

        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header" style="font-size: x-large">Login</div>
                <div class="card-body">

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

                    <a onclick="return mostrarMenu();"class="btn btn-primary btn-block" >Login</a>

                    <div class="text-center">
                        <a class="d-block small mt-3" href="{{url('/')}}/usuario/create">Registrar-se Aqui</a>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@stop