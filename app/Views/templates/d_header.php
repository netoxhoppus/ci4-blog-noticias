<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title><?php echo $title ?></title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <!--    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    -->
   <script src="<?php echo base_url('ckeditor/ckeditor.js') ?>"></script>
   <script src="<?php echo base_url('ckfinder/ckfinder.js') ?>"></script>

<!-- <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
-->
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    <!-- using local links -->
    <link rel="stylesheet" href="<?php echo base_url('sidebar/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('sidebar/css/sidebar-themes.css') ?>">
    <!--<link rel="shortcut icon" type="image/png" href="<?php /*echo base_url('sidebar/img/favicon.png') */ ?>"/>-->
    <link rel="stylesheet" href="<?php echo base_url('sidebar/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('sidebar/css/sidebar-themes.css') ?>">
</head>

<body style="background: url('<?php echo base_url('sidebar/img/bg-geral.png') ?>')">

<!-- Page Content -->


<div class="page-wrapper default-theme sidebar-bg bg1">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-brand  -->

            <div class="sidebar-item sidebar-brand">

                <a href="#">pro sidebar</a>

            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">

                    <img  class="img-responsive img-rounded" src="<?php echo base_url($_SESSION['avatar'])?>"
                         alt="User picture">
                </div>
                <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION['nome'] ?></strong>
                        </span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-item sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Search...">
                        <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar-menu  -->
            <div class=" sidebar-item sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-newspaper"></i>
                            <span class="menu-text">Notícias</span>
                            <!-- <span class="badge badge-pill badge-warning">New</span>-->
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li class="sidebar-item">
                                    <a href="<?php echo base_url('noticias/') ?>">
                                        <i class="fa fa-list-ol"></i>
                                        <span class="menu-text">Listar</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="<?php echo base_url('noticias/criar') ?>">
                                        <i class="fa fa-plus-circle"></i>
                                        <span class="menu-text">Criar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--    Usuarios  -->
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span class="menu-text">Usuários</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li class="sidebar-item">
                                    <a href="<?php echo base_url('#') ?>">
                                        <i class="fas fa-user-alt"></i>
                                        <span class="menu-text">Meu perfil</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="<?php echo base_url('usuario/listarusuarios') ?>">
                                        <i class="fa fa-list-ol"></i>
                                        <span class="menu-text">Listar</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="<?php echo base_url('usuario/criarusuario') ?>">
                                        <i class="fa fa-plus-circle"></i>
                                        <span class="menu-text">Criar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--    Usuarios  -->


            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-footer  -->
        <div class=" sidebar-footer">
            <div class="dropdown">

            </div>
            <div class="dropdown">

            </div>
            <div class="dropdown ">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                    <a class="dropdown-item" href="#"><i class="fas fa-user-alt"></i>&nbspMeu perfil</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-hands-helping"></i>&nbspHelp</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>&nbspSetting</a>
                </div>
            </div>

            <div>
                <a data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
            <div class="pinned-footer">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </div>
        </div>
    </nav>


    <!-- page-content  -->
    <main class="page-content  small mt-0">
        <!--inicio painel superior-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom" style="font-size: 15px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('home') ?>"><i class="fas fa-globe-americas"></i>&nbspIr
                            para o site <span class="sr-only">(current)</span></a>
                    </li>
                    <!--                    <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>-->
                </ul>
            </div>
        </nav>

        <!--fim-->

        <!--Botoes toggle e pin    -->
        <div class="row float-left mt-2">
            <div class=" col-md-12">
                <a id="toggle-sidebar" class="btn btn-outline-secondary p-1 btn-sm rounded-0" href="#">
                    <span class="fa fa-angle-left mr-1"></span>
                </a><br>
            </div>
        </div>
        <!--FIM botoes toggle e pin    -->

        <!--Container principal -->

        <div class="container" id="containerPrincipal">
            <div class="row ml-5">
                <div class="col-sm-2">
                </div>
                <div class="container card bg-white ml-lg-4 mt-4 " style="font-size: 16px" id="div_principal">
