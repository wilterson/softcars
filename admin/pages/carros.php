<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 19:24
 */

include_once('../config/initialize.php');
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
                Carros
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Carros</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                    <div class="col-md-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">Fusion</h3>
                                <h5 class="widget-user-desc">FORD</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?=FOTOS ?>/cars/ford-fusion.jpg" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">PLK-4596</h5>
                                            <span class="description-text">Placa</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">2016</h5>
                                            <span class="description-text">Ano</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Branca</h5>
                                            <span class="description-text">Cor</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-3" >
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user" >
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black">
                                <h3 class="widget-user-username">Camaro</h3>
                                <h5 class="widget-user-desc">CHEVROLET</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?=FOTOS ?>/cars/camaro.jpg" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">PLK-4596</h5>
                                            <span class="description-text">Placa</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">2017</h5>
                                            <span class="description-text">Ano</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Vermelho</h5>
                                            <span class="description-text">Cor</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                </div>
                <!--/.col (right) -->
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastrar Carro</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" class="formRotas" method="post" action="">
                            <div class="box-body">
                                <div class="form-group col-md-3">
                                    <label for="marcaCar">Marca</label>
                                    <select name="marcaCar" id="marcaCar" class="form-control">
                                        <option value="">Marca</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modeloCar">Modelo</label>
                                    <select name="marcaCar" id="modeloCar" class="form-control">
                                        <option value="">Modelo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="placaCar">Placa</label>
                                    <input type="text" class="form-control" id="placaCar" placeholder="Placa">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="anoCar">Ano</label>
                                    <input type="text" class="form-control" id="anoCar" placeholder="Ano">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="corCar">Cor</label>
                                    <input type="text" class="form-control" id="corCar" placeholder="Cor">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <a class="btn btn-flat btn-success" id="addCar"><i class="fa fa-plus"></i> Adicionar carro</a>
                                <button type="reset" class="btn btn-flat btn-danger" id=""><i class="fa fa-eraser"></i> Limpar campos</button>
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


