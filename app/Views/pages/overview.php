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
              action="<?php echo base_url('noticias/buscar') ?>" method="post">
            <div class="input-group " id="input_busca">


                <i class="fade fa-search" aria-hidden="true"></i>
                <input name="valor" class=" form-control w-75" type="text" placeholder="Search" aria-label="Search">
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
                <td> <?php echo $news_item['title'] ?></td>

                <td>
                    <p>

                        <a href="<?php echo base_url() . '/noticias/' . $news_item['slug'] ?>">
                            <button class="btn col-2 btn-primary btn-sm">Abrir</button>
                        </a>

                        <a href="<?php echo base_url() . '/noticias/editar/' . $news_item['id'] ?>">
                            <button class="btn col-2 btn-warning btn-sm">Editar</button>
                        </a>

                        <a href="<?php echo base_url() . '/noticias/excluir/' . $news_item['id'] ?>">
                            <button class="btn col-2 btn-danger btn-sm" onclick="confirm_delete()">Deletar</button>
                        </a>


                    </p>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="float-right pagination" id="pager">
        <?php if ($pager) : ?>
        <?php $pager->setPath('noticias'); ?>
        <?= $pager->links() ?>
        <?php endif ?>
    </div>


</div>


<?php else : ?>

    <h3>[Nenhuma notícia cadastrada]</h3>

    <p> <?php //echo anchor('news/', 'Ir para a página de notícias. >>')?></p>

<?php endif ?>
<script>

    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

