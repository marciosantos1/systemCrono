<!-- ...CADASTRAR SEQUÊNCIA....-->

@extends('layout')

@section('conteudo')

<script>
    function criarnovaLinha() {

        linha = '<tr>\n\
                <td><input class="form-control-sm"></td>\n\
                <td><input class="form-control-sm"></td>\n\
                <td><input class="form-control-sm"></td>\n\
                <td><input class="form-control-sm"></td>\n\
                <td><input class="form-control-sm"></td>\n\
                <td><input class="form-control-sm"></td>\n\
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
        @csrf
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center" >Cadastro de elementos</div>
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
                            <td><input name="nomeElemento []" class="form-control-sm"></td>
                            <td><input name="ritmo []" class="form-control-sm"></td>
                            <td><input name="interferencia []" class="form-control-sm"></td>
                            <td><input name="concessoes []" class="form-control-sm"></td>
                            <td><input name="qdtVezes []" class="form-control-sm"></td>
                            <td><input name="porPeca []" class="form-control-sm"></td>  
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