<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de cronometragem</title>

        <style type="text/css">
            #cronometro { padding:10px; border: 5px blue double; width: 360px;
                          text-align: center }
            #reloj {border: 2px solid black; 
                    font: bold 1.5em digital, europa, arial; text-align: center;}
            #cronometro [type=button]  { margin: 4px; font: normal 9pt arial } 
        </style>
        <!-- Custom fonts for this template-->
        <link href="{{url('/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="{{url('/')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{url('/')}}/css/sb-admin.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{url('/')}}/js/cronometro.js" type="text/javascript"></script>
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="{{url('/')}}">SystemCrono</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>



        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="login.html" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-user-circle"></i>
                        <span>Usuário</span>
                    </a> <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{url('/')}}/login">Fazer login</a> 
                        <a class="dropdown-item" href="{{url('/')}}/usuario/create">Cadastrar usuário</a>
                        <a class="dropdown-item" href="{{url('/')}}/usuario">Listar/Editar</a>


                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                        <span>Produtos</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{url('/')}}/produto/create">Cadastro</a>
                        <a class="dropdown-item" href="{{url('/')}}/produto">Listar</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Operações</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{url('/')}}/operacao/create">Cadastro operações</a>
                        <a class="dropdown-item" href="{{url('/')}}/elemento/create">Cadastro elemento</a>
                        <a class="dropdown-item" href="{{url('/')}}/operacao">Listar</a>
                        <a class="dropdown-item" href="{{url('/')}}/sequencia/create">Cadastro de sequência</a>
                        <a class="dropdown-item" href="{{url('/')}}/tomada-tempo">Tomada de tempo</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-clipboard"></i>
                        <span>Relatórios</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{url('/')}}/cronometragem">cronometragem</a>
                        
                </li>


            </ul>

            <div class="container-fluid"> 

                <!--Conteudo da Pagina-->

                @yield('conteudo')


                <div>

                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>SystemCrono Website 2019</span>
                            </div>
                        </div>
                    </footer>

                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{url('/')}}/vendor/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{url('/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="{{url('/')}}/vendor/chart.js/Chart.min.js"></script>
        <script src="{{url('/')}}/vendor/datatables/jquery.dataTables.js"></script>
        <script src="{{url('/')}}/vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{url('/')}}/js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="{{url('/')}}/js/demo/datatables-demo.js"></script>
        <script src="{{url('/')}}/js/demo/chart-area-demo.js"></script>

    </body>

</html>