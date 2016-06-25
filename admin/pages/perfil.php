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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">
    <!-- Bootstrap datepicker -->
    <link href="../../assets/plugins/datepicker/datepicker3.css" type="text/css" rel="stylesheet">
    <!-- Sweet Alert -->    <link rel="stylesheet" href="../../assets/css/sweetalert.css" type="text/css">

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
                            <img class="profile-user-img img-responsive img-circle" src="<?= FOTOS ?>/users/user_male.png" alt="Imagem de perfil do usuário">

                            <h3 class="profile-username text-center"><?= ucwords($nome) ?></h3>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Carros Cadastrados</b> <a class="pull-right">0</a>
                                </li>
                                <li class="list-group-item">
                                <b>Tipo de Uuário</b> <a class="pull-right"><?= $tipo_user == 1 ? 'Passageiro' : 'Motorista'?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Idade</b> <a class="pull-right"><?php   $idadeUser = new Auxiliares(); $idadeUser->getIdade($dataNascimento); echo $idadeUser->idade;?></a>
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
                            <li class="active"><a href="#settings" data-toggle="tab">Dados da Conta</a></li>
                            <li class=""><a href="#acesso" data-toggle="tab">Dados de Acesso</a></li>
                            <li class=""><a href="#activity" data-toggle="tab">Fotos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">

                            </div>

                            <div class="tab-pane" id="acesso">
                                <form class="form-horizontal" id="formDadosAcesso" action="" method="post">
                                    <div class="form-group">
                                        <label for="Login" class="col-sm-2 control-label">Login</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="Login" name="login" placeholder="Login" value="<?= $login ?>">
                                            <span class="text-sm text-blue">E-mail utilizado para fazer login no sistema</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Senha" class="col-sm-2 control-label">Senha Atual</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="Senha" name="senha" placeholder="Senha" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="SenhaNova" class="col-sm-2 control-label">Nova Senha</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="SenhaNova" name="novaSenha" placeholder="Nova Senha"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="SenhaNovaAgain" class="col-sm-2 control-label">Repita a Senha</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="SenhaNovaAgain" name="novaSenhaAgain" placeholder="Repita a senha" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button class="btn btn-file"><i class="fa fa-floppy-o"></i> Atualizar Dados</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->

                            <div class=" active tab-pane" id="settings">
                                <form class="form-horizontal" id="formPerfil" action="" method="post">
                                    <div class="form-group">
                                        <label for="userName" class="col-sm-2 control-label">Nome</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="userName" name="nome" placeholder="Nome Completo" value="<?= ucwords($nome) ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="userEmail" placeholder="Email" value="<?= $email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userCelular" class="col-sm-2 control-label">Celular</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="celular" id="userCelular" placeholder="Celular" value="<?= $celular ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userDtNasc" class="col-sm-2 control-label">Data de nascimento</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="dtNasc" id="userDtNasc" placeholder="dd/mm/aaaa" readonly="readonly" style="background: #FFF;" value="<?= $dataNascimento ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userCep" class="col-sm-2 control-label">Cep</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="cep" id="userCep" placeholder="Cep" value="<?= $cep ?>">
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
                                            <button class="btn btn-primary"><i class="fa fa-floppy-o"></i> Salvar dados</button>
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
<!-- Input Mask -->
<script type="application/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="../../assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- Sweet Alert -->
<script type="text/javascript" src="../../assets/js/sweetalert.min.js"></script>
<!-- Bootstrap Datepicker -->
<script type="text/javascript" src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../assets/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js"></script>
<!-- jQuery Validate -->
<script type="text/javascript" src="../../assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/additional-methods.js"></script>
<!-- Moment with locales -->
<script type="text/javascript" src="../../assets/js/moment-with-locales.js"></script>
<script>
    $( document ).ready(function(){
        //Pega data de hoje e subtrai 18 anos para iniciar o datepicker (somente maiores de 18 anos se cadastraram no sistema)
        // Utiliza biblioteca moment.js para a manipulacao de datas
        var dataHoje = moment().locale('pt').format('L');
        var dataInicio = moment().subtract(18, 'years');
        dataInicio = dataInicio.format('DD/MM/YYYY');

        $('#userCelular').inputmask("(99)9999-9999");
        $('#userCep').inputmask("99999-999");

        //Inicia o datepicker
        $('#userDtNasc').datepicker({
            language: 'pt-BR',
            keyboardNavigation: false,
            format: 'dd/mm/yyyy',
            startView: 2,
            endDate: dataInicio
        });

        $("#formPerfil").validate({
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
                    url: "../upd_cadastro.php",
                    data: dados,
                    success: function( data ){
                        if(data == "success"){
                            swal("Atualizado!", "Dados atualizados com sucesso", "success");
                        }else if(data == "error"){
                            swal("Erro!", "Erro ao atualizar. Tente novamnete mais tarde", "error");
                        }
                    }
                });

                return false;
            },

            onkeyup: false,
            rules: {
                nome:{
                    required: true
                },
                email:{
                    required: true,
                    email: true
                },
                celular:{
                    required: true
                },
                dtNasc:{
                    required: true
                },
                cep:{
                    required: true
                }
            },
            messages: {
                nome:{
                    required: "Esse campo é obrigatório"
                },
                email:{
                    required: "Esse campo é obrigatório",
                    email: "Formato de email inválido"
                },
                celular:{
                    required: "Esse campo é obrigatório"
                },
                dtNasc:{
                    required: "Esse campo é obrigatório"
                },
                cep:{
                    required: "Esse campo é obrigatório"
                }
            },

        });

        $("#formDadosAcesso").validate({
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
                alert('OK!');
//                var dados = $( form ).serialize();
//                $.ajax({
//                    type: "POST",
//                    url: "../upd_login.php",
//                    data: dados,
//                    success: function( data ){
//                        if(data == "success"){
//                            swal("Atualizado!", "Dados atualizados com sucesso", "success");
//                        }else if(data == "error"){
//                            swal("Erro!", "Erro ao atualizar. Tente novamnete mais tarde", "error");
//                        }
//                    }
//                });
//
//                return false;
            },
            rules: {
                "login":{
                    required: true,
                    email: true
                },
                "senha":{
                    required: true,
                    minLength: 6
                },
               "novaSenha":{
                    required: true,
                    minLength: 6
                },
                "novaSenhaAgain":{
                    required: true,
                    minLength: 6,
                    equalTo: "#SenhaNova"
                }
            },
            messages: {
                "login":{
                    required: "Este campo não pode ficar em branco",
                    email: "Formato de e-mail inválido"
                },
                "senha":{
                    required: "Este campo não pode ficar em branco",
                    minLength: "A senha deve conter ao menos 6 caracteres"
                },
                "novaSenha":{
                    required: "Este campo não pode ficar em branco",
                    minLength: "A senha deve conter ao menos 6 caracteres"
                },
                "novaSenhaAgain":{
                    required: "Este campo não pode ficar em branco",
                    minLength: "A senha deve conter ao menos 6 caracteres",
                    equalTo: "As senhas não conferem"
                }
            }
        });
    });
</script>
</body>
</html>


