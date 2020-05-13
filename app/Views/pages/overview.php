<h2><?= $title ?></h2>

<div class=" list-inline mt-1 mb-2">

    <div class="list-inline mb-2">
        <div class="float-left">
            <a href="<?php echo base_url('/noticias/criar/') ?>">
                <button class="btn btn-outline-primary">Criar notícia</button>
            </a>
        </div>

        <!-- Search form -->
        <form class="form-inline d-flex list-group-horizontal justify-content-end md-form form-sm mt-0"
              action="<?php echo base_url('noticias/buscar') ?>" method="get">
            <div class="input-group " id="input_busca">


                <i class="fas fa-search mt-2" aria-hidden="true"></i>

                <div class="active-cyan-3 active-cyan-4 ml-3">
                    <input name="valor" class="form-control w-100" type="text" placeholder="Search" aria-label="Search">
                </div>

                <button class="btn list-inline btn-outline-primary" type="submit">buscar</button>
            </div>
        </form>

    </div>

</div>
<br>

<?php if (!empty($news) && is_array($news)) : ?>

    <div class="table">
        <table id="datatable" class="table table-striped table-hover table-sm">

            <tr class="table table-active">
                <th>Título</th>
                <th>Ação</th>
            </tr>

            <?php foreach ($news as $news_item): ?>
                <tr>
                    <td> <?php echo substr($news_item['title'],0,30) ?></td>

                    <td>
                        <p>

                            <a href="<?php echo base_url() . '/noticias/' . $news_item['slug'] ?>">
                                <button class="btn  col-2 btn-primary btn-sm"><i class="far fa-eye"></i></button>
                            </a>

                            <a href="<?php echo base_url() . '/noticias/editar/' . $news_item['id_news'] ?>">
                                <button class="btn col-2 btn-warning btn-sm"><i class="far fa-edit"></i></button>
                            </a>

                            <a href="<?php echo base_url() . '/noticias/excluir/' . $news_item['id_news'] ?>">
                                <button class="btn col-2 btn-danger btn-sm" onclick="confirm_delete()"><i class="far fa-trash-alt"></i></button>
                            </a>


                        </p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="float-right row" id="pager">
                <?php echo $pager->links('default', 'bootstrap_pagination') ?>
        </div>


    </div>

<?php else : ?>
    <h3>[Nenhuma notícia cadastrada]</h3>
<?php endif ?>


