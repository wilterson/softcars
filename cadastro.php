<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Softcars - Compartilhando Caminhos</title>
    <meta name="description" content="Web App de carona solidaria, divida seu carro com pessoas que fazem o mesmo trajeto que você, ou pegue carona com motoristas que tem o mesmo destino." />
    <meta name="keywords" content="web app, solidarity, ride, solidarity ride, carona, solidaria, carona solidaria, economia, amigos" />
    <meta name="author" content="Wilterson Garcia, Ivanilson Lino" />
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <script src="assets/js/modernizr.custom.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div id="splitlayout" class="splitlayout">
        <div class="intro">
            <div class="side side-left">
                <header class="codropsheader clearfix logo">
                    <img src="assets/img/logo.png" alt="logo">
                </header>
                <div class="intro-content">
                    <div class="profile"><img src="assets/img/car-icon.png" alt="profile1"></div>
                    <h1><span>Sou Motorista</span></h1>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="side side-right">
                <div class="intro-content">
                    <div class="profile"><img src="assets/img/person-icon.png" alt="profile2"></div>
                    <h1><span>Sou Passageiro</span></h1>
                </div>
                <div class="overlay"></div>
            </div>
        </div><!-- /intro -->
        <!-- Cadastro do passageiro -->
        <!-- Passageiro -->
        <div class="page page-right">
            <div class="page-inner">
                <section>
                    <h2>Passageiro</h2>
                    <p>Faça seu cadastro para começar a pegar caronas desejada.</p>
                </section>

                <section>
                    <form action="cadastra-passageiro.php" method="post" id="formPassageiro">
                        <fieldset class="form-section">
                            <legend><span class="number">1</span>Dados Pessoais</legend>
                            <label for="pName">Nome:</label>
                            <input type="text" id="pName" name="user_name">

                            <label for="pMail">Email:</label>
                            <input type="email" id="pMail" name="user_email">

                            <label for="pPassword">Senha:</label>
                            <input type="password" id="pPassword" name="user_password">

                            <label for="pPasswordAgain">Repita Senha:</label>
                            <input type="password" id="pPasswordAgain" name="user_passwordAgain">

                            <label for="pIdade">Idade:</label>
                            <input type="text"  id="pIdade" name="user_age">
                        </fieldset>

                        <fieldset class="form-section">
                            <legend><span class="number">2</span>Endereço</legend>

                            <label for="pCep">CEP:</label>
                            <input type="text" id="pCep" name="user_cep">

                            <label for="pEstado">Estado:</label>
                            <select  id="pEstado" name="user_estado">
                                <option value="">Selecione</option>
                                <option value="acre">AC</option>
                                <option value="alagoas">AL</option>
                                <option value="amapa">AP</option>
                            </select>

                            <label for="pCidade">Cidade:</label>
                            <input type="text" id="pCidade" name="user_cidade">

                            <label for="pRua">Rua:</label>
                            <input type="text"  id="pRua" name="user_rua">

                            <label for="pNumero">Número:</label>
                            <input type="text" id="pNumero" name="user_numero">

                            <label for="pComplemento">Complemento:</label>
                            <input type="text" id="pComplemento" name="user_complemento" placeholder="Campo obrigatório caso more num AP">
                        </fieldset>
                        <button type="submit">Cadastrar</button>
                    </form>
                </section>

            </div><!-- /page-inner -->
        </div>
        <!-- /Passageiro -->

        <!-- Cadastro do motorista -->
        <!-- Motorista -->
        <div class="page page-left">
            <div class="page-inner">
                <section>
                    <h2>Motorista</h2>
                    <p>Faça seu cadastro para oferecer caronas.</p>
                </section>
                <section>
                    <form action="cadastra-veiculo.php" method="post" id="formMotorista">
                        <fieldset class="form-section">
                            <legend><span class="number">1</span>Dados Pessoais</legend>
                            <label for="mName">Nome:</label>
                            <input type="text" id="mName" name="driver_name">

                            <label for="mMail">Email:</label>
                            <input type="email" id="mMail" name="driver_email">

                            <label for="mPassword">Senha:</label>
                            <input type="password" id="mPassword" name="driver_password">

                            <label for="mPasswordAgain">Repita Senha:</label>
                            <input type="password" id="mPasswordAgain" name="driver_password">

                            <label for="mIdade">Idade:</label>
                            <input type="text" id="mIdade" name="driver_age">
                        </fieldset>

                        <fieldset class="form-section">
                            <legend><span class="number">2</span>Dados do Veículo</legend>
                            <label for="mMarca">Marca:</label>
                            <select  id="mMarca" name="car_marca">
                                <option value="">Selecione</option>
                                <option value="chevrolet">Chevrolet</option>
                                <option value="ford">Ford</option>
                                <option value="hyundai">Hyundai</option>
                                <option value="toyota">Toyota</option>
                                <option value="fiat">Fiat</option>
                                <option value="wolksvagem">Wolksvangem</option>
                                <option value="kia">KIA</option>
                                <option value="citroen">Citroen</option>
                            </select>

                            <label for="mModelo">Modelo:</label>
                            <input type="text" id="mModelo" name="car_modelo">

                            <label for="mCor">Cor:</label>
                            <input type="text" id="mCor" name="car_cor">

                            <label for="mPlaca">Placa:</label>
                            <input type="text" id="mPlaca" name="car_placa">
                        </fieldset>

                        <fieldset class="form-section">
                            <legend><span class="number">3</span>Endereço</legend>

                            <label for="mCep">CEP:</label>
                            <input type="text" id="mCep" name="driver_cep">

                            <label for="mEstado">Estado:</label>
                            <select  id="mEstado" name="driver_estado">
                                <option value="">Selecione</option>
                                <option value="acre">AC</option>
                                <option value="alagoas">AL</option>
                                <option value="amapa">AP</option>
                            </select>

                            <label for="mCidade">Cidade:</label>
                            <input type="text" id="mCidade" name="driver_cidade">

                            <label for="mRua">Rua:</label>
                            <input type="text"  id="mRua" name="driver_rua">

                            <label for="mNumero">Número:</label>
                            <input type="text" id="mNumero" name="driver_numero">

                            <label for="mComplemento">Complemento:</label>
                            <input type="text" id="mComplemento" name="driver_complemento" placeholder="Campo obrigatório caso more num AP">
                        </fieldset>

                        <button type="submit">Cadastrar</button>
                    </form>
                </section>
            </div><!-- /page-inner -->
        </div>
        <!-- /Motorista -->

        <a href="#" class="back back-right" title="back to intro">&rarr;</a>
        <a href="#" class="back back-left" title="back to intro">&larr;</a>
    </div><!-- /splitlayout -->
</div><!-- /container -->

<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpSplitLayout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- jQuery Validation -->
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/additional-methods.min.js"></script>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#formPassageiro" ).validate({
            rules:{
                user_name:{
                    required: true,
                },
                user_email:{
                    required: true,
                    email: true
                },
                user_password:{
                    required: true,
                    minlength: 8
                },
                user_passwordAgain:{
                    required: true,
                    equalTo: "#pPassword"
                },
                user_age:{
                    required: true,
                    min: 18,
                    number: true
                },
                user_cep:{
                    required: true
                },
                user_estado:{
                    required: true
                },
                user_cidade:{
                    required: true
                },
                user_rua:{
                    required: true
                },
                user_numero:{
                    required: true
                }
            },

            messages: {
                user_name:{
                    required: "Usuário é obrigatório",
                },
                user_email:{
                    required: "Email é obrigatorio",
                    email: "Email inválido"
                },
                user_password:{
                    required: "Cadastre uma senha de 8 caracteres ou mais.",
                    minlength: "A senha deve ter ao menos 8 caracteres"
                },
                user_passwordAgain:{
                    required: "Este campo é obrigatório",
                    equalTo: "As senhas não conferem"
                },
                user_age:{
                    required: "Cadastre sua Idade",
                    min: "Somente maiores de 18 Anos podem pegar caronas",
                    number: "Somente números"
                },
                user_cep:{
                    required: "CEP é obrigatório"
                },
                user_estado:{
                    required: "Estado Obrigatório"
                },
                user_cidade:{
                    required: "Cidade é obrigatório"
                },
                user_rua:{
                    required: "Rua é obrigatório"
                },
                user_numero:{
                    required: "Campo obrigatório"
                }

            }
        });

        $( "#formMotorista" ).validate({
            rules:{
                driver_name:{
                    required: true,
                },
                driver_email:{
                    required: true,
                    email: true
                },
                driver_password:{
                    required: true,
                    minlength: 8
                },
                driver_passwordAgain:{
                    required: true,
                    equalTo: "#mPassword"
                },
                driver_age:{
                    required: true,
                    min: 18,
                    number: true
                },
                car_marca:{
                    required: true
                },
                car_modelo:{
                    required: true
                },
                car_cor:{
                    required: true
                },
                car_placa:{
                    required: true
                },
                driver_cep:{
                    required: true
                },
                driver_estado:{
                    required: true
                },
                driver_cidade:{
                    required: true
                },
                driver_rua:{
                    required: true
                },
                driver_numero:{
                    required: true
                }
            },
            messages: {
                driver_name:{
                    required: "Usuário é obrigatório",
                },
                driver_email:{
                    required: "Email é obrigatorio",
                    email: "Email inválido"
                },
                driver_password:{
                    required: "Cadastre uma senha de 8 caracteres ou mais.",
                    minlength: "A senha deve ter ao menos 8 caracteres"
                },
                driver_passwordAgain:{
                    required: "Este campo é obrigatório",
                    equalTo: "As senhas não conferem"
                },
                driver_age:{
                    required: "Cadastre sua Idade",
                    min: "Somente maiores de 18 Anos ser motoristas",
                    number: "Somente números"
                },
                car_marca:{
                    required: "A marca do carro é obrigatória"
                },
                car_modelo:{
                    required: "O modelo do carro é obrigatório"
                },
                car_cor:{
                    required: "A cor do carro é obrigatória"
                },
                car_placa:{
                    required: "A placa do carro é obrigatória"
                },
                driver_cep:{
                    required: "CEP é obrigatório"
                },
                driver_estado:{
                    required: "Estado Obrigatório"
                },
                driver_cidade:{
                    required: "Cidade é obrigatório"
                },
                driver_rua:{
                    required: "Rua é obrigatório"
                },
                driver_numero:{
                    required: "Campo obrigatório"
                }
            }
        });
    })
</script>
</html>
