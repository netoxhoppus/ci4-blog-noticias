<div class="row">
    <div class="col-md-10 col-lg-8">


        <?php  if (!empty($newsPrev) && is_array($newsPrev)) : ?>

        <?php foreach ($newsPrev as $news_item): ?>
            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title"><?php echo $news_item['title'] ?></h2>
                    <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                </a>
                <p class="post-meta">Posted by&nbsp;<a href="#">Start Bootstrap on September 24, 2018</a></p>
            </div>
            <hr>
        <?php endforeach; ?>

        <?php else : ?>
        <?php echo $title; ?>

            <h3>[Nenhuma notícia]</h3>
        <?php endif ?>

        <div class="clearfix">
            <button class="btn btn-primary float-right" type="button">Older Posts&nbsp;⇒</button>
        </div>
    </div>
</div>
