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

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/css/sweetalert.css" type="text/css">

    <!-- Bootstrap Toggle -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Bootstrap datepicker -->
    <link href="assets/plugins/datepicker/datepicker3.css" type="text/css" rel="stylesheet">

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
        <form action="admin/config/login.php" method="post" id="formLogin">
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

<!-- Error Login -->
<div class="login-box-buttons label-error hidden">
    <p><i class="fa  fa-exclamation-circle"> </i> </p>
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
        <form action="" method="post" id="formCadastro">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nome Completo" name="registrar-nome" id="cadNome" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="E-mail" name="registrar-email" id="cadEmail" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <label id="error-label" class="error" for="cadEmail"></label>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Celular" id="celular" name="registrar-celular" />
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                <label id="error-label" class="error" for="cadCelular"></label>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control datepicker" placeholder="Data Nascimento" id="dtNasc" name="registrar-dtNasc" readonly="readonly" style="background: #FFF;"/>
                <span class="glyphicon glyphicon-gift form-control-feedback"></span>
                <label id="error-label" class="error" for="cadDtNasc"></label>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="CEP" id="cep" name="registrar-cep"/>
                <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                <label id="error-label" class="error" for="cadCep"></label>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Senha" id="senha" name="registrar-senha"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <label id="error-label" class="error" for="cadPass"></label>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Repita a Senha" id="senha-again" name="registrar-senha-again" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <label id="error-label" class="error" for="cadPassAgain"></label>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12 button-cadastrar text-center">
                    <button class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                    <span class="avisoObrg">Todos os campos são obrigatórios</span>
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

<!-- Input Mask -->
<script type="application/javascript" src="assets/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- Sweet Alert -->
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

<!-- jQuery Validate -->
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/additional-methods.js"></script>

<!-- Bootstrap Datepicker -->
<script type="text/javascript" src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js"></script>

<!-- Moment with locales -->
<script type="text/javascript" src="assets/js/moment-with-locales.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        //Pega data de hoje e subtrai 18 anos para iniciar o datepicker (somente maiores de 18 anos se cadastraram no sistema)
        // Utiliza biblioteca moment.js para a manipulacao de datas
        var dataHoje = moment().locale('pt').format('L');
        var dataInicio = moment().subtract(18, 'years');
        dataInicio = dataInicio.format('DD/MM/YYYY');

        // Inicia o style do radio button
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        //Inicia o datepicker
        $('.datepicker').datepicker({
            language: 'pt-BR',
            keyboardNavigation: false,
            format: 'dd/mm/yyyy',
            startView: 2,
            endDate: dataInicio
        });

        // Mascaras de input
        $('#cep').inputmask("99999-999");
        $('#celular').inputmask("(99)9999-9999");
        $("#dtNasc").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

        //Toggle nas boxes de login/cadastro
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

        $("#formCadastro").validate({
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
                    url: "admin/cadastro.php",
                    data: dados,
                    success: function( data ){
                        if(data == "success"){
                            swal("Sucesso!", "Você foi cadastrado com sucesso! Use seu e-mail e senha para fazer login no sistema", "success");
                            $('.ja-tem-conta').click();
                        }else if(data == "erro email"){
                            swal("Erro!", "Esse email já possui um cadastro.", "error");
                        }else{
                            swal("Erro!", "Algo deu errado. Tente novamente mais tarde", "error");
                        }
                    }
                });

                return false;
            },

            onkeyup: false,
            rules: {
                "registrar-nome" : {
                    required : true
                },

                "registrar-email":{
                    required: true,
                    email: true,
                },

                "registrar-celular":{
                    required: true
                },

                "registrar-dtNasc":{
                    required: true,
                    dateBR: true
                },

                "registrar-cep":{
                    required: true
                },

                "registrar-senha":{
                    required: true,
                    minlength: 6
                },

                "registrar-senha-again":{
                    required: true,
                    equalTo: "#senha"
                }
            },
            messages: {
                "registrar-nome" : {
                    required : "Insira o nome"
                },

                "registrar-email":{
                    required: "Insira seu email",
                    email: "Formato de email inválido",
                },

                "registrar-celular":{
                    required: "Insira seu celular"
                },

                "registrar-dtNasc":{
                    required: "Insira sua data de nascimento",
                    date: "Formato de data incorreto"
                },

                "registrar-cep":{
                    required: "Insira seu cep"
                },

                "registrar-senha":{
                    required: "Insira sua senha",
                    minlength: "A senha deve conter ao menos 6 caracteres"
                },

                "registrar-senha-again":{
                    required: "Esse campo é obrigatório",
                    equalTo: "Senhas não conferem"
                }
            },

        });

        //Form Login
        $("#formLogin").validate({
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
                    url: "admin/config/login.php",
                    data: dados,
                    success: function( data ){
                        if(data == "success"){
                            swal("Sucesso!", "Você foi cadastrado com sucesso! Use seu e-mail e senha para fazer login no sistema", "success");
                            $('.ja-tem-conta').click();
                        }else if(data == "erro email"){
                            swal("Erro!", "Esse email já possui um cadastro.", "error");
                        }else{
                            swal("Erro!", "Algo deu errado. Tente novamente mais tarde", "error");
                        }
                    }
                });

                return false;
            },

            onkeyup: false,
            rules: {
                "login-email":{
                    required: true,
                    email: true
                },
                "login-senha":{
                    required: true
                }
            },
            messages: {
                "login-email":{
                    required: "Preencha esse campo",
                    email: "Formato de e-mail inválido"
                },
                "login-senha":{
                    required: "Preencha esse campo"
                }
            },

        });
    });
</script>
</body>
</html>
