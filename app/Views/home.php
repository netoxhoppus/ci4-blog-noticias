<div class="clearfix float-right">
    <?php echo $pager->links('default', 'bootstrap_pagination') ?>
</div>

<?php if (!empty($newsPrev) && is_array($newsPrev)) : ?>

    <?php foreach ($newsPrev as $news_item): ?>
        <div class="post-preview mt-4">
            <a href="<?php echo base_url('noticias/' . $news_item['slug']) ?>">
                <h2 class="post-title "><?php echo $news_item['title'] ?></h2>
                <h3 style="text-align: justify"
                    class="post-subtitle"><?php echo substr($news_item['subtitle'], 0, 350) ?>...
                </h3>
            </a>
            <p class="post-meta">Postado por&nbsp;
                <a href="#"> <?php
                    $noticiasModel = new \App\Models\NoticiasModel();
                    echo $noticiasModel->getAutor($news_item['id_autor'])[0]['nome'];
                    ?>
                </a> em
                <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;"><?php
                    $date = date_create($news_item['data_criacao']);
                    echo date_format($date, 'd-m-Y H:i');
                    ?>
                </a>
            </p>
        </div>
        <hr>
    <?php endforeach; ?>

<?php else : ?>
    <h3 class="mt-4">Nenhum resultado </h3><i class="far fa-frown"></i>
<?php endif ?>

<div class="clearfix float-right">
    <?php echo $pager->links('default', 'bootstrap_pagination') ?>
</div>

</div>
<!--div apoiadores futuramente-->
<!--    <div  style="border: 0.1px; border-style: outset" class="col-xl">
<div style="background: #000000" class="flex-md-row mt-1">
teste
</div>
</div>-->
</div>
