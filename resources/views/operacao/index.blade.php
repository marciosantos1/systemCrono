@extends('layout')

@section('conteudo')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="cadastroOperacao.html" class="btn-link">Nova operação</a>
        </li>

    </ol>

    <!-- Tabela de listar -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Lista de Operações</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Operação</th>
                            <th>Produto</th>
                            <th>Opção</th>
                            <th>Tomada de tempo</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($operacoes as $p)
                        <tr>
                            <th>10</th>
                            <th>Fechar Ombro</th>
                            <th>Camisa polo</th>
                            <th><a href="{{route('operacao.edit',$p->codoperacao)}}" class="btn btn-primary">Editar</a>
                                <a href=""  onclick="return delOperacao('del{{$p->codoperacao}}','{{route('operacao.destroy',$p->codoperacao)}}')" class="btn btn-danger">Excluir</a></th>

                    <form action="" method="post" id="del{{$p->codoperacao}}">
                        @csrf
                        @method('DELETE')
                    </form>
                    <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                    </tr>
                      @endforeach

                    <tr>
                        <th>12</th>
                        <th>Costurar Barras</th>
                        <th>Calça</th>
                        <th><a href="editarOperacao.html" class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Excluir</a></th>
                        <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                    </tr>
                    <tr>
                        <th>13</th>
                        <th>Costurar Gola</th>
                        <th>Camisa polo</th>
                        <th><a href="editarOperacao.html" class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Excluir</a></th>
                        <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                    </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
@stop