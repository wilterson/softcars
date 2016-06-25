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
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/dashboard.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../../assets/css/sweetalert.css" type="text/css">
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
                    <?php

                    $carros = new Read();
                    $carros->ExeRead('carros','WHERE id_usuario=:id','id='.$_SESSION['user_id']);

                    if($carros->getRowCount() >= 1){
                        foreach ($carros->getResult() as $carro){
                            extract($carro);
                            ?>
                            <div class="col-md-3">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-black">
                                        <h3 class="widget-user-username"><?= ucwords($modelo) ?></h3>
                                        <h5 class="widget-user-desc"><?= strtoupper($marca) ?></h5>
                                    </div>
                                    <div class="widget-user-image">
                                        <img class="img-circle" src="<?=FOTOS ?>/cars/car2.png" alt="User Avatar">
                                    </div>
                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-sm-4 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header"><?= strtoupper($placa) ?></h5>
                                                    <span class="description-text">Placa</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header"><?= $ano ?></h5>
                                                    <span class="description-text">Ano</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4">
                                                <div class="description-block">
                                                    <h5 class="description-header"><?= ucwords($cor) ?></h5>
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

                            <?php
                        }
                    }
                    ?>
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
                        <form role="form" class="" method="post" action="" id="formCarros">
                            <div class="box-body">
                                <div class="form-group col-md-3">
                                    <label for="marcaCar">Marca</label>
                                    <select name="marcaCar" id="marcaCar" class="form-control">
                                        <option value="">Selecione</option>
                                        <?php
                                        $marca = new Read();
                                        $marca->ExeRead('marca_carros');
                                        if($marca->getRowCount() >=1){
                                            foreach ($marca->getResult() as $marca){
                                                extract($marca);
                                                ?>
                                                <option value="<?= $marca ?>"><?=ucwords($marca)?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modeloCar">Modelo</label>
                                    <input type="text" name="modelo" class="form-control" id="modeloCar" placeholder="Modelo do Carro"/>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="placaCar">Placa</label>
                                    <input type="text" class="form-control" name="placa" id="placaCar" placeholder="ABC-1234">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="anoCar">Ano</label>
                                    <input type="text" class="form-control" name="ano" id="anoCar" placeholder="Ano">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="corCar">Cor</label>
                                    <input type="text" class="form-control" name="cor" id="corCar" placeholder="Cor">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-flat btn-success" id="addCar"><i class="fa fa-plus"></i> Adicionar carro</button>
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
<!-- AdminLTE App -->
<script src="../dist/js/app.js"></script>
<!-- Input Mask -->
<script type="application/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- jQuery Validate -->
<script type="text/javascript" src="../../assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/additional-methods.js"></script>

<!-- Bootstrap Datepicker -->
<script type="text/javascript" src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../assets/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js"></script>

<!-- Moment with locales -->
<script type="text/javascript" src="../../assets/js/moment-with-locales.js"></script>
<!-- Sweet Alert -->
<script type="text/javascript" src="../../assets/js/sweetalert.min.js"></script>
</body>

<script>

    $( document ).ready(function () {

        $('#placaCar').inputmask('aaa-9999');

        $("#formCarros").validate({
            showErrors: function(errorMap, errorList) {
                // Clean up any tooltips for valid elements
                $.each(this.validElements(), function (index, element) {
                    var $element = $(element);
                    $element.data("title", "") // Clear the title - there is no error associated anymore
                        .removeClass("error")
                        .tooltip("destroy");
                });
                // Create new tooltips for invalid elements
                $.each(errorList, function (index, error) {
                    var $element = $(error.element);
                    $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                        .data("title", error.message)
                        .addClass("error")
                        .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
                });
            },
            submitHandler: function(form) {
                var dados = $( form ).serialize();
                $.ajax({
                    type: "POST",
                    url: "../cad_carros.php",
                    data: dados,
                    success: function( data ){
                        if(data == "success"){
                            swal("Sucesso!", "Carro cadastrado com sucesso", "success");
                            location.reload();
                        }else if(data == "error"){
                            swal("Erro!", "Erro ao inserir carro.", "error");
                        }
                    }
                });
                return false;
            },

            onkeyup: false,
            rules: {
                'marcaCar':{
                    required: true
                },
                'modelo':{
                    required: true
                },
                'placa':{
                    required: true
                },
                'ano':{
                    required: true
                },
                'cor':{
                    required: true
                }
            },
            messages: {
                'marcaCar':{
                    required: "Campo Obrigatório"
                },
                'modelo':{
                    required: "Campo Obrigatório"
                },
                'placa':{
                    required: "Campo Obrigatório"
                },
                'ano':{
                    required: "Campo Obrigatório"
                },
                'cor':{
                    required: "Campo Obrigatório"
                }
            }
        });
    });
</script>
</body>
</html>


