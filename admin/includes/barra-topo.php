<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 15:30
 */
?>

<header class="main-header">
    <!-- Logo -->
    <a href="<?= ADMIN ?>/index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="<?= ASSETS ?>/img/car-icon.png" alt="">
        </span>

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="<?= ASSETS ?>/img/logo.png" alt="Logo Softcars" class="">
        </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Usuario -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= FOTOS ?>/users/user_male.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= ucwords($nome) ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= FOTOS ?>/users/user_male.png" class="img-circle" alt="User Image">

                            <p>
                                <?= ucwords($nome) ?>
                                <small>Membro Desde <?php  $data = new Auxiliares(); $data->dataBR($data_cadastro); echo $data->dateBR ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= PAGES ?>/perfil.php" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= CONFIG ?>/logout.php?logout=true" class="btn btn-default btn-flat">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="<?= CONFIG ?>/logout.php?logout=true" class="btn btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>

    </nav>
</header>