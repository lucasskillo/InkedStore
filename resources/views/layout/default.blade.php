<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Inked Store | Home</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="../../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--    Icons   -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Databales -->
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="../assets/img/full-screen-image-3.jpg">

        <div class="logo">
            <a href="#" class="logo-text">
                Inked Store
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="#" class="logo-text">
                I.S
            </a>
        </div>

        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="../../assets/img/LogoIS.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">Trocar Senha</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li class="@yield('active_home')">
                    <a href="/">
                        <i class="fa fa-bar-chart"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="@yield('cadastro')">
                    <a data-toggle="collapse" href="#cadastro">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Cadastros
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="cadastro">
                        <ul class="nav">
                            <li class="@yield('cadastro_cliente')"><a href="/clients">Clientes</a></li>
                            <li class="@yield('cadastro_fornecedor')"><a href="/providers">Fornecedores</a></li>
                            <li class="@yield('cadastro_fornecedor')"><a href="/accounts">Plano de Conta</a></li>
                            <li class="@yield('cadastro_fornecedor')"><a href="/itens">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li class="@yield('active_estoque')">
                    <a href="#">
                        <i class="fa fa-cubes"></i>
                        <p>Estoque</p>
                    </a>
                </li>
                <li class="@yield('active_nfe')">
                    <a href="/purchases">
                        <i class="fa fa-file-pdf-o"></i>
                        <p>Nota Fiscal de Entrada</p>
                    </a>
                </li>
                <li class="@yield('active_nfs')">
                    <a href="/sales">
                        <i class="fa fa-file-pdf-o"></i>
                        <p>Nota Fiscal de Saída</p>
                    </a>
                </li>
                <li class="@yield('configurações')">
                    <a data-toggle="collapse" href="#configurações">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <p>Configurações
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="configurações">
                        <ul class="nav">
                            <li class="@yield('configurações_usuario')"><a href="/users">Usuarios</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                         <li class="dropdown dropdown-with-icons">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i>
                                <p class="hidden-md hidden-lg">
                                    More
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="text-danger">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        Sair
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; 2017 Evolutech
                </p>
            </div>
        </footer>

    </div>
</div>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<script src="../../assets/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="../../assets/js/bootstrap-selectpicker.js"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="../../assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

<!--  Charts Plugin -->
<script src="../../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../../assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="../../assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="../../assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Wizard Plugin    -->
<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="../../assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="../../assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="../../assets/js/fullcalendar.min.js"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="../../assets/js/light-bootstrap-dashboard.js"></script>

<!--   Sharrre Library    -->
<script src="../../assets/js/jquery.sharrre.js"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>
</body>
</html>
