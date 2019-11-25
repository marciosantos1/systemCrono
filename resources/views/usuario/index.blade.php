@extends('layout')

@section('conteudo')

<script>
    function delUsuario(id, url){
        confirma = confirm("Deseja realmente eliminar o usuário?");
        
        if(confirma){
        dados = $('#'+id).serialize();
        $.ajax({
            method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data){
               
                $('#linha'+id).remove();  
                
            },
            error: function (argument){
                //mensagem erro
                alert('Falha ao eliminar produto');
            }
            
        });
    }
        return href="{{route('usuario.index')}}";
    }
    
</script>
    <div class="text-center" > 
            
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}/usuario/create" class="btn-link">Novo Usuário</a>
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
                        <tbody>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Senha</th>
                                <th>Opções</th>

                            </tr>
                       
                        
                            @foreach ($usuario as $u)
                    <tr id="linhadel{{$u->codUsuario}}">
                        <th>{{$u->codUsuario}} </th>
                        <th>{{$u->nome}}</th>
                        <th>{{$u->senha}}</th>
                        <th><a href="{{route('usuario.edit', $u->codUsuario)}}" class="btn btn-primary">Editar</a>
                            <a  onclick="return delUsuario('delUsuario{{$u->codUsuario}}', '{{route('usuario.destroy', $u->codUsuario)}}')" class="btn btn-danger"href="{{route('usuario.index')}}">Excluir</a>
                            <form action="" method="post" id="delUsuario{{$p->codUsuario}}">
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