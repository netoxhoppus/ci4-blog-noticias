<h2><?= $title ?></h2>
<br>
<div class="list-group">

    <a href="<?php echo base_url('/noticias/criar/') ?>">
        <button class="btn btn-primary">Criar notícia</button>
    </a>

</div>
<br>

<?php if (!empty($news) && is_array($news)) : ?>

    <div class="table">
        <table class="table table-striped table-hover table-sm">
            <tr class="table table-active">
                <th>Título</th>
                <th>Ação</th>
            </tr>
            <?php foreach ($news as $news_item): ?>
                <tr>
                    <td> <?php echo $news_item['title'] ?></td>

                    <td>
                        <p>


                            <a href="<?php echo base_url().'/noticias/'. $news_item['slug'] ?>">
                                <button class="btn col-2 btn-primary btn-sm">Abrir</button>
                            </a>

                            <a href="<?php echo base_url().'/noticias/editar/'. $news_item['id'] ?>">
                                <button class="btn col-2 btn-warning btn-sm">Editar</button>
                            </a>

                            <a href="<?php echo base_url().'/noticias/excluir/'. $news_item['id'] ?>">
                                <button class="btn col-2 btn-danger btn-sm" onclick="confirm_delete()">Deletar</button>
                            </a>

                        </p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php else : ?>

    <h3>[Nenhuma notícia cadastrada]</h3>

    <p> <?php //echo anchor('news/', 'Ir para a página de notícias. >>')?></p>

<?php endif ?>
