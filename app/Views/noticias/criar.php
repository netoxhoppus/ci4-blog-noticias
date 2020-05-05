<h2> <?= esc($title); ?> </h2>

<?php \Config\Services::validation()->listErrors(); ?>

<div class="form-group ml-5">
    <?php echo form_open(base_url('/noticias/criar')); ?>
    <div class="form-group">
        <label for="Nome">Título:</label>
        <input type="input" name="title" class="input-group-text"
               value="<?php echo isset($new['title']) ? $new['title'] : '' ?>">
    </div>

    <label for="texto">Notícia:</label>
    <textarea name="body" id="editor"
              class="input-group-text"><?php echo isset($new['body']) ? $new['body'] : '' ?></textarea>
    <input type="hidden" name="id" value="<?php echo isset($new['id']) ? $new['id'] : '' ?>">


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo base_url('noticias') ?>">
        <button type="button" class="btn btn-warning">Cancelar</button>
    </a>


    <?php echo form_close(); ?>
    <script>
        CKEDITOR.replace('body');
    </script>
</div>