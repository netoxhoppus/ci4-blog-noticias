<h2><?= $title?></h2>

    <div class="list-group">

        <a href="/news/create/">
            <button class="btn btn-primary">Criar notícia</button>
        </a>

    </div>

<?php if (!empty($news) && is_array($news)) : ?>

    <div class="table">
        <table class="table table-striped table-hover table-sm">
            <tr>
                <th>Título</th>
                <th>Notícia</th>
            </tr>
            <?php foreach ($news as $news_item):  ?>
                <tr>
                    <td> <?php  echo $news_item['title'] ?></td>
                    <td>
                        <p>
                            <a href="<?= '/news/'.$news_item['slug'] ?>">Ver</a>
                            <label class="col-form-label" >|</label>
                            <a href="<?= '/news/create/'.$news_item['id'] ?>">Editar</a>
                            <label class="col-form-label" >|</label>
                            <a href="<?= '/news/deletar/'.$news_item['id'] ?>">Deletar</a>

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