<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('/css/login.css/') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/estilo.css/') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.css/') ?>">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JAVASCRIPT-->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- JAVASCRIPT-->
</head>

<body id="corpo"
">

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
<div class="header-fixed-placeholder"></div>
<?php if (isset($_SESSION['id'])) { ?>
<div class="container card bg-white" id="div_principal_home">
    <?php } ?>


    <!-- The content of your page would go here. -->
