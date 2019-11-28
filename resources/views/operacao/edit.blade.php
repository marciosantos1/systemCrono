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
            //mensagem socesso
            alert('Operação alterada com sucesso');
            location.href = '{{route('operacao.index')}}';
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

             <div class="text-center">
        
       
    </div>
            
            <form id="create" method="post" action=""> 
                 @csrf
                <div class="text-center" >
                    
                    <h1>Editar operacao: {{$operacao->nomeOperacao}}</h1>
                    
                    <label for="exampleFormControlInput1">Painel de edição </label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" class="form-control, col-md-12" id="nomeOperacao" name="nomeOperacao" placeholder="Insira nova operacao">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Código do produto</label>

                    <select id="codproduto" name="codProduto" class="form-control, col-md-12" id="exampleFormControlSelect1">
                        
                       @foreach ($produto as $p)
                        <option value="{{$p->codProduto}}">{{$p->codProduto}} | {{$p->nomeProduto}}</option>
                       
                        @endforeach
                       
                        
                    </select>

                </div>

                <div class="form-group">
                    <label>Máquina</label>
                    <input type="text" class="form-control, col-md-12" id="maquina" name="maquina" placeholder="Insira nova máquina">
                </div>
                <div class="form-group">
                    <label>Tipo estudo</label>
                    <input type="text" class="form-control, col-md-12" id="tipoEstudo" name="tipoEstudo" placeholder="Insira novo tipo Estudo">
                </div>
                <div class="form-group">
                    <label>Cronometrista</label>
                    <input type="text" class="form-control, col-md-12" id="cronometrista" name="cronometrista" placeholder="Insira novo Cronometrista">
                </div>

              
                <a href="" onclick="return update('{{route('operacao.update', $operacao->codOperacao)}}')" class="btn btn-success">Salvar alterações</a>
                <a class="btn btn-warning"  href="">Cancelar</a>
                
                <th><a href="cadastrarElemento.html" class="btn btn-primary">Cadastrar elemento</a></th>



            </form>

        </li>

    </ol>

</div>

@stop