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
            <h1>Meu Perfil</h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Configurações</li>
                <li class="active">Meu Perfil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?= DIST ?>/img/user4-128x128.jpg" alt="Imagem de perfil do usuário">

                            <h3 class="profile-username text-center">Wilterson garcia</h3>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Carros Cadastrados</b> <a class="pull-right">0</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tipo de Uuário</b> <a class="pull-right">Passageiro</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Idade</b> <a class="pull-right">21</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-danger btn-block"><b><i class="fa fa-trash"></i> Desativar Conta</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Fotos</a></li>
                            <li><a href="#settings" data-toggle="tab">Dados da Conta</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">Nome</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userName" placeholder="Nome Completo" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="userEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userCelular" class="col-sm-2 control-label">Celular</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userCelular" placeholder="Celular">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userDtNasc" class="col-sm-2 control-label">Data de nascimento</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userDtNasc" placeholder="dd/mm/aaaa">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userCep" class="col-sm-2 control-label">Cep</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userCep" placeholder="Cep">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userTipoLogradouro" class="col-sm-2 control-label">Tipo Logradouro</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userTipoLogradouro" placeholder="Tipo Logradouro">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userLogradouro" class="col-sm-2 control-label">Logradouro</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userLogradouro" placeholder="Logradouro">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userCidade" class="col-sm-2 control-label">Cidade</label>

                                        <div class="col-sm-10">
                                            <select name="" class="form-control" id="userCidade">
                                                <option value="">Cidade</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userEstado" class="col-sm-2 control-label">Estado</label>

                                        <div class="col-sm-10">
                                            <select name="" class="form-control" id="userEstado">
                                                <option value="">Estado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Salvar dados</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
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


