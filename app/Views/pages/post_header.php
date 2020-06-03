<header class="masthead" style="background-image:url('<?= base_url($news['img_capa']) ?>'">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="post-heading">
                    <h1><?php echo $news['title'] ?></h1> <!--titulo da noticia-->
                    <h2 class="subheading"><?php echo $news['subtitle'] ?></h2>
                    <span class="meta">
                        Postado por&nbsp;
                        <a href="#"> <?php
                            $noticiasModel = new \App\Models\NoticiasModel();
                            //dd($noticiasModel->getAutor(isset($news['id_autor'])));
                            echo $noticiasModel->getAutor($news['id_autor'])[0]['nome'];
                            ?>
                        </a> em
                        <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;"><?php
                            $date = date_create($news['data_criacao']);
                            echo date_format($date, 'd-m-Y H:i');
                            ?>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">



                