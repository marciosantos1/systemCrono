@extends('layout')

@section('conteudo')
<div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Lista de elementos</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nome</th>
                                            <th>Opçao</th>

                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                            <th>10</th>
                                            <th>....</th>
                                            <th><a href="editarProduto.html?cod=5" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>


                                        <tr>
                                            <th>12</th>
                                            <th>....</th>
                                            <th><a href="" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>
                                        <tr>
                                            <th>13</th>
                                            <th>....</th>
                                            <th><a href="" class="btn btn-primary">Editar</a>
                                                <a href="" class="btn btn-danger">Excluir</a></th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

@stop