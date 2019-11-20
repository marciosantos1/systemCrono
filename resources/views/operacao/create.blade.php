@extends('layout')

@section('conteudo')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}/operacao/create" class="btn-link">Nova operação</a>

            <form>
                <div class="text-center" >
                    <label for="exampleFormControlInput1">Cadastro de operações</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" class="form-control, col-md-12" id="exampleFormControlInput1" placeholder="Insira o nome da operacao">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Código da operação</label>
                    <select class="form-control, col-md-12" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Máquina</label>
                    <input type="text" class="form-control, col-md-12" id="exampleFormControlInput1" placeholder="Insira a máquina">
                </div>
                <div class="form-group">
                    <label>Tipo estudo</label>
                    <input type="text" class="form-control, col-md-12" id="exampleFormControlInput1" placeholder="Insira o tipo Estudo">
                </div>
                <div class="form-group">
                    <label>Cronometrista</label>
                    <input type="text" class="form-control, col-md-12" id="exampleFormControlInput1" placeholder="Insira o Cronometrista">
                </div>

                <th><a href="" class="btn btn-success">Salvar</a></th>
                <th><a href="" class="btn btn-warning">Cancelar</a></th>
                <th><a href="{{url('/')}}/sequencia/create" class="btn btn-primary">Cadastrar elemento</a></th>



            </form>

        </li>

    </ol>

</div>
@stop