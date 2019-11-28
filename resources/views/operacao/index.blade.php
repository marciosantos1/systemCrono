@extends('layout')

@section('conteudo')

<script>
    function delOperacao(id, url){
    confirma = confirm("Deseja realmente eliminar a operação ?");
    if (confirma){
    dados = $('#' + id).serialize();
    $.ajax({
    method: 'post',
            url: url,
            data:dados,
            dataType:'html',
            sucess: function (data){
            //Mensagem de sucesso
            $('#linha' + id).remove();
            },
            error: function (argument) {
            //Mnesagem de erro
            alert('falha ao eliminar produto !');
            }
    });
    }
    return false;
    }
</script>

<div class="container-fluid">



    <!-- Tabela de listar -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Lista de Operações</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered form-control-file" id="dataTable" width="100%" cellspacing="0">
                    <thead >
                        <tr>
                            <th>Código</th>
                            <th>Nome da Operação</th>
                            <th>Máquina</th>
                            <th>Tipo estudo</th>
                            <th>Cronometrista</th>
                            <th>Opção</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($operacao as $p)
                        <tr id="linhadel{{$p->codOperacao}}">
                        <tr>
                            <th>{{$p->codOperacao}} </th>
                            <th>{{$p->nomeOperacao}}</th>
                            <th>{{$p->maquina}}</th>
                            <th>{{$p->tipoEstudo}}</th>
                            <th>{{$p->cronometrista}}</th>
                            <th> <div class="card">
                                    <a href="{{route('elemento.index')}}?cod={{$p->codOperacao}}" class="btn btn-warning">Listar elementos</a>
                                    <a href="{{route('operacao.edit', $p->codOperacao)}}" class="btn btn-primary">Editar</a>
                                    <a href="" onclick="return delOperacao('del{{$p->codOperacao}}', '{{route('operacao.destroy', $p->codOperacao)}}')" class="btn btn-danger">Excluir</a>
                                </div>
                                <form action="" method="post" id="del{{$p->codOperacao}}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </th>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
@stop