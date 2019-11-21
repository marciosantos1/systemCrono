@extends('layout')

@section('conteudo')
<div class="text-center" > 
            
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="register.html" class="btn-link">Novo Usuário</a>
            </li>

        </ol>

        <!-- Tabela de listar -->
        <div class="card mb-3">
            <div class="card-header" style="font-size: x-larger" >
                <i class="fas fa-table"></i>
                Lista de usuários</div>
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
                                <th>1</th>
                                <th>Luiz Souza</th>
                                <th><a href="editarUsuario.html" class="btn btn-primary">Editar</a>
                                    <a href="" class="btn btn-danger">Excluir</a></th>
                            </tr>


                            <tr>
                                <th>2</th>
                                <th>Jonas Alves da Costa</th>
                                <th><a href="editarUsuario.html" class="btn btn-primary">Editar</a>
                                    <a href="" class="btn btn-danger">Excluir</a></th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>Jonatan Silva</th>
                                <th><a href="editarUsuario.html" class="btn btn-primary">Editar</a>
                                    <a href="" class="btn btn-danger">Excluir</a></th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@stop