<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="MpsRjOvKJva8BPeLwQiKvhB6IVcYSYujux4f9wBE">
    <title>Sistema de Gerenciamento de TCC</title>
    <link rel="apple-touch-icon" sizes="76x76" href="http://localhost:8000/material/img/apple-icon.png">
    <link rel="icon" type="image/png" href="http://localhost:8000/material/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="http://localhost:8000/material/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="http://localhost:8000/material/demo/demo.css" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="http://localhost:8000">Inicio</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="http://localhost:8000/login" class="nav-link">
                            <i class="material-icons">fingerprint</i> Entrar
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="http://localhost:8000/area-geral" class="nav-link">
                            <i class="material-icons">face</i> Área Geral
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('http://localhost:8000/material/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="text-white text-center">Projetos</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-plain">
                                    <div class="card-header card-header-primary" style="background: #962038">
                                        <h4 class="card-title mt-0">Área Geral</h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{!! action('AreaGeralController@listarProfessores') !!}" class="form-inline">
                                            {{ csrf_field() }}
                                            <div class="form-group col-md-10 mb-2">
                                                <label style="padding-right:1%" for="pesquisa">Pesquise uma área:</label>
                                                <input name="pesquisa" class="form-control col-md-9" type="text" placeholder="Search" aria-label="Search">
                                            </div>
                                            <button type="submit" style="background: #962038" class="btn btn-primary mb-2">Pesquisar</button>
                                        </form>
                                        <div style="padding: 2% 2% 2% 2%">
                                            <h4 class="card-title mt-0 text-center">Projetos</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="">
                                                        <th>
                                                            Ano
                                                        </th>
                                                        <th>
                                                            Semestre
                                                        </th>
                                                        <th>
                                                            ID
                                                        </th>
                                                        <th>
                                                            Aluno
                                                        </th>
                                                        <th>
                                                            Professor
                                                        </th>
                                                        <th>
                                                            Titulo
                                                        </th>
                                                        <th>
                                                            Área
                                                        </th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($projetos as $projeto)
                                                        <tr>
                                                            <td>{{$projeto->ano}}</td>
                                                            <td>{{$projeto->semestre}}</td>
                                                            <td>{{$projeto->idprojeto}}</td>
                                                            <td>{{$projeto->aluno}}</td>
                                                            <td>{{$projeto->professor}}</td>
                                                            <td>{{$projeto->titulo}}</td>
                                                            <td>{{$projeto->area}}</td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="http://localhost:8000/material/js/core/jquery.min.js"></script>
    <script src="http://localhost:8000/material/js/core/popper.min.js"></script>
    <script src="http://localhost:8000/material/js/core/bootstrap-material-design.min.js"></script>
    <script src="http://localhost:8000/material/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="http://localhost:8000/material/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="http://localhost:8000/material/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="http://localhost:8000/material/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="http://localhost:8000/material/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="http://localhost:8000/material/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="http://localhost:8000/material/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="http://localhost:8000/material/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="http://localhost:8000/material/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="http://localhost:8000/material/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="http://localhost:8000/material/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="http://localhost:8000/material/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="http://localhost:8000/material/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="http://localhost:8000/material/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
    <!-- Chartist JS -->
    <script src="http://localhost:8000/material/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="http://localhost:8000/material/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="http://localhost:8000/material/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="http://localhost:8000/material/demo/demo.js"></script>
    <script src="http://localhost:8000/material/js/settings.js"></script>
</body>

</html>