<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 19:24
 */

include_once('../config/initialize.php');
include_once('../config/session.php');
include_once('../config/dados_user.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Softcars | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/dashboard.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
    //Barra Topo
    include_once('../includes/barra-topo.php');

    //Menu
    include_once('../includes/menu.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Caronas
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Caronas</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- USERS LIST -->
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Todas as caronas cadastradas</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Motorista</th>
                                    <th>Data</th>
                                    <th>Assentos Disponiveis</th>
                                    <th>Origem</th>
                                    <th>Destino</th>
                                    <th>Comentário</th>
                                    <th>Ações</th>
                                </tr>
                                <tr>
                                    <td>#1</td>
                                    <td>John Doe</td>
                                    <td>12/06/2016</td>
                                    <td><span class="label label-success">4</span></td>
                                    <td>Santa Cândida</td>
                                    <td>Pinheirinho</td>
                                    <td>Saida as 8h30</td>
                                    <td>
                                        <a class="btn btn-flat btn-success"><i class="fa fa-thumbs-o-up"></i> Solicitar</a>
                                        <a class="btn btn-flat btn-primary"><i class="fa fa-search"></i> Ver Detalhes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td>John Doe</td>
                                    <td>12/06/2016</td>
                                    <td><span class="label label-warning">1</span></td>
                                    <td>Portão</td>
                                    <td>Fazenda Rio Grande</td>
                                    <td>Saida as 8h30</td>
                                    <td>
                                        <a class="btn btn-flat btn-success"><i class="fa fa-thumbs-o-up"></i> Solicitar</a>
                                        <a class="btn btn-flat btn-primary"><i class="fa fa-search"></i> Ver Detalhes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td>John Doe</td>
                                    <td>12/06/2016</td>
                                    <td><span class="label label-warning">2</span></td>
                                    <td>Pinheirinho</td>
                                    <td>Campina do Siqueira</td>
                                    <td>Saida as 8h30</td>
                                    <td>
                                        <a class="btn btn-flat btn-success"><i class="fa fa-thumbs-o-up"></i> Solicitar</a>
                                        <a class="btn btn-flat btn-primary"><i class="fa fa-search"></i> Ver Detalhes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td>John Doe</td>
                                    <td>12/06/2016</td>
                                    <td><span class="label label-success">4</span></td>
                                    <td>Pinhais</td>
                                    <td>Colombo</td>
                                    <td>Saida as 8h30</td>
                                    <td>
                                        <a class="btn btn-flat btn-success"><i class="fa fa-thumbs-o-up"></i> Solicitar</a>
                                        <a class="btn btn-flat btn-primary"><i class="fa fa-search"></i> Ver Detalhes</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--/.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    //Footer
    include_once('../includes/footer.php');
    ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../assets/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>


