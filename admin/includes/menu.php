<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 15:57
 */

?>

<!-- Menu lateral -->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Infos Usuário -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= DIST ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li>
                <a href="<?= ADMIN ?>/index.php"> <!-- Dashboard Link -->
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= PAGES ?>/rotas.php"> <!-- Rotas Link -->
                    <i class="fa fa-road"></i> <span>Minhas Rotas</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-car"></i> <span>Caronas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-calendar-o"></i> Todas as Caronas</a></li>
                    <li><a href=""><i class="fa fa-search"></i> Procurar Carona</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= PAGES ?>/agenda.php"> <!-- Agenda Link -->
                    <i class="fa fa-calendar"></i> <span>Agenda Semanal</span>
                </a>
            </li>
            <li>
                <a href="<?= PAGES ?>/historico.php"> <!-- Histórico Link -->
                    <i class="fa fa-history"></i> <span>Histórico de Caronas</span>
                </a>
            </li>


            <li class="header">Meu Perfil</li>
            <li>
                <a href="<?= PAGES ?>/perfil.php"> <!-- perfil Link -->
                    <i class="fa fa-user"></i> <span>Meu Perfil</span>
                </a>
            </li>
            <li>
                <a href="<?= PAGES ?>/settings.php"> <!-- Configs Link -->
                    <i class="fa fa-cogs"></i> <span>Configurações</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
