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

<div id="content-wrapper">

    <form id="edit" method="post" action=""> 
        <input type="hidden" id="codOperacao" name="codOperacao" value=""/>
        @csrf
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center" >Cadastro de elementos</div>
                <br>
                <table>

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ritmo</th>
                            <th>Interferência</th>
                            <th>Concessões</th>
                            <th>Qtd.vezes</th>
                            <th>Por peça</th>

                        </tr>
                    </thead>

                    <tbody id="corpoTabela">
                        @foreach ($elementos as $p)
                       
                        <tr id="linhaDel{{$p->codElemento}}">
                           
                            <td><input name="nomeElemento[]" class="form-control-file" value="{{$p->nomeElemento}}"></td>
                            <td><input name="ritmo[]" class="form-control-file" value="{{$p->ritmo}}"></td>
                            <td><input name="interferencia[]" class="form-control-file" value="{{$p->interferencia}}"></td>
                            <td><input name="concessoes[]" class="form-control-file" value="{{$p->concessoes}}"></td>
                            <td><input name="qtdVezes[]" class="form-control-file" value="{{$p->qtdVezes}}"></td>
                            <td><input name="porPeca[]" class="form-control-file" value="{{$p->porPeca}}"></td>  
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </form>
    <a href="" class="btn btn-primary"> + </a>
    <a href=""class="btn btn-danger">Cadastrar</a>

</div>
@stop
