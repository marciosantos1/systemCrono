@extends('layout')

@section('conteudo')
&nbsp;&nbsp;
<!-- Tabela de listar -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Lista de produtos</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Opção</th>

                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                            <th>10</th>
                                            <th>Camisa polo</th>
                                            <th><a href="editarProduto.html?cod=5" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>


                                        <tr>
                                            <th>12</th>
                                            <th>Calça</th>
                                            <th><a href="" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>
                                        <tr>
                                            <th>13</th>
                                            <th>Camisa polo</th>
                                            <th><a href="" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

@stop
