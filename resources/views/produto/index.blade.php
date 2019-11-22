@extends('layout')

@section('conteudo')

<script>
    function delProduto(id, url){
        confirma = confirm("deseja realmente eliminar o produto");
        
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
        return false;
    }
</script>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Lista de produtos</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Opçao</th>

                    </tr>

                    @foreach ($produto as $p)
                    <tr id="linhadel{{$p->codProduto}}">
                        <th>{{$p->codProduto}} </th>
                        <th>{{$p->nomeProduto}}</th>
                        <th><a href="{{route('produto.edit', $p->codProduto)}}" class="btn btn-primary">Editar</a>
                            <a href="" onclick="return delProduto('del{{$p->codProduto}}', '{{route('produto.destroy', $p->codProduto)}}')" class="btn btn-danger">Excluir</a>
                            <form action="" method="post" id="del{{$p->codProduto}}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </th>
                    </tr>

                    @endforeach
            </table>
        </div>
    </div>

</div>

@stop