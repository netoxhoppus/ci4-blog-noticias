<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <link rel="stylesheet"
          href="<?php echo base_url('tema_assets/bootstrap/css/bootstrap.min.css') ?>?h=3ad8d4903859dcd5bc61764098e977e6">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="index.html">Brand</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item" role="presentation"><a class="nav-link"
                                                            href="<?php echo base_url('home') ?>">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="about.html">About us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html">Contact us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="post.html">Blog Post</a></li>
                <?php if (isset($_SESSION['id'])) { ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="modal"
                                                                data-target="#exampleModal"
                                                                href="<?php echo base_url('usuario/logout') ?>">
                            <i style="color: #22ff16" class="fa fa-power-off">&nbsp</i><?php echo $_SESSION['nome']; ?></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                    </li><?php } ?>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead"
        style="background-image:url('<?php echo base_url('tema_assets/img/home-bg.jpg') ?>?h=ed6236475a1226b743bf65e6f1bebb34');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Clean Blog</h1><span class="subheading">A Blog Theme by Start Bootstrap</span></div>
            </div>
        </div>
    </div>
</header>
<div class="container">