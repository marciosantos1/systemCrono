@extends('layout')

@section('conteudo')

<script>
    function createOperacao(url){

    dados = $('#create').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data){
            //mensagem socesso
            alert('Operação cadastrado com socesso');
            },
            error: function (argument){
            //mensagem erro
            alert('Erro');
            }

    });
    return false;
    }

</script>

<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">

            <form id="create" method="post" action=""> 
                @csrf
                <div class="text-center" >
                    <label for="exampleFormControlInput1">Cadastro de operações</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" class="form-control, col-md-12" id="nomeOperacao" name="nomeOperacao" placeholder="Insira o nome da operacao">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Código do produto</label>

                    <select id="codproduto" name="codproduto" class="form-control, col-md-12" id="exampleFormControlSelect1">
                        @foreach ($produto as $p)
                        <option value="{{$p->codProduto}}">{{$p->codProduto}} | {{$p->nomeProduto}}</option>

                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label>Máquina</label>
                    <input type="text" class="form-control, col-md-12" id="maquina" name="maquina" placeholder="Insira a máquina">
                </div>
                <div class="form-group">
                    <label>Tipo estudo</label>
                    <input type="text" class="form-control, col-md-12" id="tipoEstudo" name="tipoEstudo" placeholder="Insira o tipo Estudo">
                </div>
                <div class="form-group">
                    <label>Cronometrista</label>
                    <input type="text" class="form-control, col-md-12" id="cronometrista" name="cronometrista" placeholder="Insira o Cronometrista">
                </div>

                <a class="btn btn-warning"  href="">Cancelar</a>
                <a href="" onclick="return createOperacao('{{route('operacao.store')}}')" class="btn btn-danger">Cadastrar</a>
                <a href="{{route('elemento.create')}}" class="btn btn-primary">Cadastrar elemento</a>



            </form>

        </li>

    </ol>

</div>

@stop