<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 18:57
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
    <link rel="stylesheet" href="../dist/css/rotas.css">
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
                Todas as Rotas
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Rotas</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastrar Nova Rota</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" id="formRotas" method="post" action="">
                            <div class="box-body">
                                <div class="form-group col-md-3">
                                    <label for="nomeRota">Nome da rota (opcional)</label>
                                    <input type="text" class="form-control" id="nomeRota" name="nomeRota" placeholder="Ex: Casa - Trabalho">
                                    <span class="text-info text-help">Você pode colocar um nome na sua rota para mante-las organizadas.</span>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="origem">Origem</label>
                                    <input type="text" class="form-control" name="origemRota" id="origem" placeholder="Origem">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="destino">Destino</label>
                                    <input type="text" class="form-control" name="destinoRota" id="destino" placeholder="Destino">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="observacoes">Observações</label>
                                    <input type="text" class="form-control" name="observacaoRota" id="observacoes" placeholder="Observações">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-flat btn-success" id="addRota"><i class="fa fa-plus"></i> Adicionar rota</button>
                                <button type="reset" class="btn btn-flat btn-danger" id=""><i class="fa fa-eraser"></i> Limpar campos</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning box-solid ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rotas cadastradas</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Nome da Rota</th>
                                    <th>Origem</th>
                                    <th>Destino</th>
                                    <th>Cadastrada em</th>
                                    <th>Observações</th>
                                    <th>Ações</th>
                                    <th>Favoritar</th>
                                </tr>

                                <?php
                                $atual = filter_input(INPUT_GET, 'atual', FILTER_VALIDATE_INT);

                                $Pager = new Pager('rotas.php?atual=', 'Primeira', 'Última');
                                $Pager->ExePager($atual, 4);

                                $read = new Read();
                                $read->ExeRead('rotas_passageiro', 'WHERE id_passageiro = :id', "id=".$_SESSION['user_id']);

                                $i = 1;
                                if( $read-> getRowCount()){
                                    foreach ($read->getResult() as $rota){
                                        extract($rota);
                                        ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?= ucwords($nome_rota) ?></td>
                                            <td><?= ucfirst($origem) ?></td>
                                            <td><?= ucfirst($destino) ?></td>
                                            <td><?= date('d/m/Y', strtotime($cadastrada_em)) ?></td>
                                            <td><?= ucfirst($obsRota) ?></td>
                                            <td>
                                                <a class="btn btn-flat btn-success"><i class="fa fa-car"></i> Iniciar rota</a>
                                                <a class="btn btn-flat btn-primary"><i class="fa fa-pencil"></i> Editar</a>
                                                <a class="btn btn-flat btn-danger"><i class="fa fa-trash"></i> Excluir</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-flat btn-warning"><i class="fa fa-star-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <?= $Pager->getPaginator(); ?>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
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
        $("#formRotas").validate({
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
                $('.avisoObrg').addClass('success');
                var dados = $( form ).serialize();

                $.ajax({
                    type: "POST",
                    url: "../cad_rotas.php",
                    data: dados,
                    success: function( data ){
                        if(data == "success"){
                            swal("Sucesso!", "Rota cadastrada com sucesso", "success");
                            location.reload();
                        }else if(data == "error"){
                            swal("Erro!", "Erro ao inserir rota.", "error");
                        }
                    }
                });

                return false;
            },

            onkeyup: false,
            rules: {
                'nomeRota':{
                    required: true
                },
                'origemRota':{
                    required: true
                },
                'destinoRota':{
                    required: true
                }
            },
            messages: {
                'nomeRota':{
                    required: "Esse Campo é Obrigatório",
                },
                'origemRota':{
                    required: "Esse Campo é Obrigatório",
                },
                'destinoRota':{
                    required: "Esse Campo é Obrigatório",
                }
            },

        });
    });
</script>
</html>

