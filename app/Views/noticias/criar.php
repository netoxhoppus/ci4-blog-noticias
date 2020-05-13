<h2> <?= esc($title); ?> </h2>

<?php \Config\Services::validation()->listErrors(); ?>


<div class="form-group ml-5">
    <?php echo form_open(base_url('/noticias/criar'), 'method="post"'); ?>
    <div class="form-group">
        <?php if (isset($_SESSION['errors']['title'])) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <li><?= esc($_SESSION['errors']['title']) ?></li>
                </ul>
            </div>
        <?php } ?>
        <label for="Nome">Título:</label>
        <input type="input" name="title" class="input-group-text"
               value="<?php echo isset($new['title']) ? $new['title'] : old('title') ?>">
    </div>

    <div class="input-group-lg mt-4">
        <?php if (isset($_SESSION['errors']['subtitle'])) { ?>
            <div class="alert alert-danger " role="alert">
                <ul>
                    <li><?= esc($_SESSION['errors']['subtitle']) ?></li>
                </ul>
            </div>
        <?php } ?>
        <label for="Nome">Subtítulo:</label>
        <textarea name="subtitle"
                  class="input-group-lg"
        ><?php echo isset($new['subtitle']) ? $new['subtitle'] : old('subtitle') ?></textarea>
    </div>

    <div class="input-group-lg mt-4">
        <?php if (isset($_SESSION['errors']['body'])) { ?>
            <div class="alert alert-danger " role="alert">
                <ul>
                    <li><?= esc($_SESSION['errors']['body']) ?></li>
                </ul>
            </div>
        <?php } ?>
        <label for="texto">Notícia:</label>
        <textarea name="body" id="editor"
                  class="input-group-text"
                  required="required"><?php echo isset($new['body']) ? $new['body'] : old('body') ?></textarea>

        <input type="hidden" name="id_news"
               value="<?php echo isset($new['id_news']) ? $new['id_news'] : old('id_news') ?>">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo base_url('noticias') ?>">
        <button type="button" class="btn btn-warning">Cancelar</button>
    </a>


    <?php echo form_close(); ?>
    <script>
        CKEDITOR.replace('body');
    </script>
</div>