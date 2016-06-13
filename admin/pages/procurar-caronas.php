<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 11/06/2016
 * Time: 07:29
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
                Procurar Caronas
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="<?= PAGES ?>/caronas.php"> Caronas</a></li>
                <li class="active">Procurar Caronas</li>
            </ol>
            <p class="lead">Entre com os dados abaixo para procurar uma carona com o mesmo destino que você</p>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pesquisar caronas</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" class="formRotas" method="post" action="">
                            <div class="box-body">
                                <div class="form-group col-md-3">
                                    <label for="origem">Origem</label>
                                    <input type="text" class="form-control" id="origem" placeholder="Origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="destino">Destino</label>
                                    <input type="text" class="form-control" id="destino" placeholder="Destino">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lugares">Lugares Vagos</label>
                                    <input type="number" class="form-control" id="lugares" placeholder="Lugares Vagos" max="4" min="1" />
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <a class="btn btn-flat btn-default" id=""><i class="fa fa-search"></i> Procurar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (left) -->
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


