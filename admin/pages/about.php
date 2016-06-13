<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 19:25
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
                Sobre o Aplicativo
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Sobre</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-7 col-xs-7 col-lg-7">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Softcars</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body text-center">
                            <p class="lead">Aplicativo desenvolvido como projeto interdisciplinar III no curso de Tecnologia em Análise e Desenvolvimento de Sistemas pela Universidade Tuiuti do Paraná.</p>

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="<?= DIST ?>/img/slide1.jpg" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img src="<?= DIST ?>/img/slide2.jpg" alt="Second slide">
                                    </div>
                                    <div class="item">
                                        <img src="<?= DIST ?>/img/slide3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-3 col-lg-3">
                    <!-- Profile Image -->
                    <div class="box box-primary box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Desenvolvedores</h3>
                        </div>
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?= FOTOS ?>/devs/wilterson.jpg" alt="Imagem de perfil do usuário">
                            <h3 class="profile-username text-center">Wilterson Garcia</h3>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item text-center">
                                    <a target="_blank" href="https://www.facebook.com/WiltersonGarcia" class="btn btn-social btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="https://github.com/wilterson" class="btn btn-social btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                    <a target="_blank" href="https://br.linkedin.com/in/wilterson-garcia-a48b7792" class="btn btn-social btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>


                            <img class="profile-user-img img-responsive img-circle" src="<?= DIST ?>/img/user4-128x128.jpg" alt="Imagem de perfil do usuário">

                            <h3 class="profile-username text-center">Ivanilson Lino</h3>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
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


