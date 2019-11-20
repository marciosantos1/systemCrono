
<!-- ...LISTAR OPERAÇÕES....-->

@extends('layout')

@section('conteudo')
<div class="container-fluid">
                  
                    <!-- Tabela de listar -->
                    <div class="card mb-3">
                        <div class="card-header" style="font-size: larger">
                            <i class="fas fa-table"></i>
                            Lista de Operações</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome da Operação</th>
                                            <th>Produto</th>
                                            <th>Opção</th>
                                            <th>Tomada de tempo</th>


                                        </tr>
                                    
                                    
                                        <tr>
                                            <th>10</th>
                                            <th>Fechar Ombro</th>
                                            <th>Camisa polo</th>
                                            <th><a href="{{url('/')}}/operacao/1/edit" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                            <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                                        </tr>


                                        <tr>
                                            <th>12</th>
                                            <th>Costurar Barras</th>
                                            <th>Calça</th>
                                            <th><a href="{{url('/')}}/operacao/1/edit" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                            <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                                        </tr>
                                        <tr>
                                            <th>13</th>
                                            <th>Costurar Gola</th>
                                            <th>Camisa polo</th>
                                            <th><a href="{{url('/')}}/operacao/1/edit" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                            <th><a href="telaCronometragem.html" class="btn btn-info">Iniciar</a></th>
                                        </tr>

                                    </tbody>
                                   <th><a href="{{url('/')}}/operacao/create" class="btn btn-success">Nova operação</a></th>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
@stop