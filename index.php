<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Softcars</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Page style -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

    <!-- Bootstrap Toggle -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="admin/index.php">
            <img src="assets/img/logo.png" alt="Logo Softcars" class="logo">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form action="admin/login.php" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="login-email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Senha" name="login-senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Lembre-me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4 button-entrar">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="admin/forgotpass.php">Esqueci minha senha</a>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Nao possui conta -->
<div class="login-box-buttons">
    <a href="#" class="register-toggle">Não possuo conta</a>
</div>

<!-- Registrar -->
<div class="registrar-box hidden">
    <div class="registrar-logo">
        <a href="admin/index.php">
            <img src="assets/img/logo.png" alt="Logo Softcars" class="logo">
        </a>
    </div>
    <!-- /.registrar-logo -->
    <div class="registrar-box-body">
        <form action="admin/cadastro.php" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nome Completo" name="registrar-nome">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="E-mail" name="registrar-email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <select name="estado" class="form-control select-estado">
                    <option value="">Estado<option>
                    <option value="curitiba">PR</option>
                    <option value="pinhais"></option>
                    <option value="colombo"></option>
                </select>

                <select name="cidade" class="form-control select-cidade">
                    <option value="">Cidade<option>
                    <option value="curitiba">Curitiba</option>
                    <option value="pinhais">Pinhais</option>
                    <option value="colombo">Colombo</option>
                </select>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="E-mail" name="registrar-email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Senha" name="login-senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="checkbox" name="tipo" checked data-toggle="toggle" data-on="Motorista" data-width="110" data-off="Passageiro" data-onstyle="info" data-offstyle="primary">
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4 button-cadastrar">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>

        </form>
    </div>
    <!-- /.registrar-box-body -->
</div>
<!-- /.registrar-box -->

<!-- Já possui conta -->
<div class="registrar-box-buttons hidden">
    <a href="" class="ja-tem-conta">Já possuo uma conta</a>
</div>

<!-- jQuery 2.2.0 -->
<script src="assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        $('.register-toggle').on("click", function(){
            $('.login-box').addClass("hidden");
            $('.registrar-box').removeClass("hidden");

            $('.login-box-buttons').addClass('hidden');
            $('.registrar-box-buttons').removeClass('hidden');
        });

        $('.ja-tem-conta').on("click", function(){
            $('.login-box').removeClass("hidden");
            $('.registrar-box').addClass("hidden");

            $('.login-box-buttons').removeClass('hidden');
            $('.registrar-box-buttons').addClass('hidden');
        });
    });
</script>
</body>
</html>
