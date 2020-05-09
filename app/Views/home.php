<div class="row mb-2">
        <form class="form-inline d-flex list-group-horizontal justify-content-end  mt-0"
              action="<?php echo base_url('buscar') ?>" method="get">
            <div class="input-group " id="input_busca">
                <div class="active-cyan-3 active-cyan-4 ml-3">
                    <input name="valor" class="form-control mt-2 w-100" type="text" placeholder="Search"
                           aria-label="Search">
                </div>
                <button class="btn btn-outline-primary btn-sm" type="submit">buscar</button>
            </div>
        </form>
</div>

<div class="row">
    <div class="col-md-10 col-lg-8">

        <div class="clearfix float-right">
            <?php echo $pager->links('default', 'bootstrap_pagination') ?>
        </div>

        <?php if (!empty($newsPrev) && is_array($newsPrev)) : ?>

            <?php foreach ($newsPrev as $news_item): ?>
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title"><?php echo $news_item['title'] ?></h2>
                        <h3 style="text-align: justify"
                            class="post-subtitle"><?php echo substr($news_item['body'], 0, 350) ?>...
                        </h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;
                        <a href="#">Start Bootstrap on
                            <?php
                            $date = date_create($news_item['data']);
                            echo date_format($date, 'd-m-Y H:i');
                            ?>
                        </a>
                    </p>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php //dd($newsPrev[3]['id']);//echo $pager->links('default', 'bootstrap_pagination') ?>

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

