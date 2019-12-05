<!-- ...CADASTRAR SEQUÊNCIA....-->

@extends('layout')

@section('conteudo')

<script>
    function criarnovaLinha() {

        linha = '<tr>\n\
                <td><input name="nomeElemento[]" class="form-control-file"></td>\n\
                <td><input name="ritmo[]" class="form-control-file"></td>\n\
                <td><input name="interferencia[]" class="form-control-file"></td>\n\
                <td><input name="concessoes[]" class="form-control-file"></td>\n\
                <td><input name="qtdVezes[]" class="form-control-file"></td>\n\
                <td><input name="porPeca[]" class="form-control-file"></td>\n\
                </tr>';

        $('#corpoTabela').append(linha);
        return false;
    }
    function createElemento(url) {

        dados = $('#create').serialize();
        $.ajax({
            method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
                //mensagem socesso
                
                alert('Elementos cadastrados com socesso');
                location.href = '{{route('operacao.index')}}';
            },
            error: function (argument) {
                //mensagem erro
                alert('Erro');
            }

        });
        return false;
    }

</script>

<div id="content-wrapper">

    <form id="create" method="post" action=""> 
        <input type="hidden" id="codOperacao" name="codOperacao" value="{{$p->codOperacao}}"/>
        @csrf
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center" >Cadastro de elementos</div>
                <div class="text-center">Operação: {{$p->nomeOperacao}} Cod:{{$p->codOperacao}}</div>
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

                        <tr>
                            <td><input name="nomeElemento[]" class="form-control-file"></td>
                            <td><input name="ritmo[]" class="form-control-file"></td>
                            <td><input name="interferencia[]" class="form-control-file"></td>
                            <td><input name="concessoes[]" class="form-control-file"></td>
                            <td><input name="qtdVezes[]" class="form-control-file"></td>
                            <td><input name="porPeca[]" class="form-control-file"></td>  
                        </tr>


                    </tbody>
                </table>
            </div>
        </div> 
    </form>
    <a href="" onclick="return criarnovaLinha()" class="btn btn-primary"> + </a>
    <a href="" onclick="return createElemento('{{route('elemento.store')}}')" class="btn btn-danger">Cadastrar</a>

</div>
@stop