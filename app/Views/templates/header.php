<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>

    <link href="<?php echo base_url('css/sidebar/main.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/css/googleapis.css/') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/login.css/') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/estilo.css/') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css/') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css/') ?>">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- JAVASCRIPT-->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- JAVASCRIPT-->
</head>

<body id="corpo" >

<header class="header-fixed">

    <div class="header-limiter">

        <h1><a href="<?= base_url('home') ?>">Sistema de <span>Notícias</span></a></h1>

        <nav>

            <a href="<?= base_url('home') ?>">HomeBlog</a>
            <a href="<?= base_url('sobre') ?>">About</a>
            <a href="#">Faq</a>
            <a href="<?= base_url('contato') ?>">Contact</a>
            <a href="<?= base_url('noticias') ?>">Área restrita</a>
            <!--<a href="<? /*= base_url('usuario/logout') */ ?>" onclick="confirma("sair")">-->
            <?php if (isset($_SESSION['id'])) { ?>

                <?php
                helper('html');
                $onclick = array('onclick' => "return confirm('Confirma saída?')");
                echo anchor(base_url('usuario/logout'), 'Logout ' .
                    '<small>' . '[' . $_SESSION['nome'] . ']' . '</small>'
                    . img(['src' => base_url('/imgs/session_open.png'),
                        'id' => 'img_session']), $onclick);
            } else {
                helper('html');
                ?>
                <?php

                echo anchor(base_url('usuario/login'), 'Login ' .
                    img(['src' => base_url('/imgs/session_close.png'),
                        'id' => 'img_session'
                    ])); ?>
                <script onload="tiraFundo()">

                </script>

            <?php }
            ?>
        </nav>

    </div>


</header>

<!-- You need this element to prevent the content of the page from jumping up -->


<div class="container card bg-white  mt-3 " id="div_principal_home">







        <!-- The content of your page would go here. -->
