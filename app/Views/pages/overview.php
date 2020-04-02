<h2><?= $title?></h2>

<?php if (!empty($news) && is_array($news)) : ?>

    <table class="table table-striped table-hover">
        <tr>
            <th>Título</th>
            <th>Notícia</th>
        </tr>
        <?php foreach ($news as $news_item):  ?>
            <tr>
                <td> <?php  echo $news_item['title'] ?></td>
                <td>
                    <p>
                        <a href="<?= '/news/'.$news_item['slug'] ?>">Ver artigo</a>
                    </p>
                </td>
            </tr>
         <?php endforeach; ?>
    </table>

<?php else : ?>

        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

<?php endif ?>