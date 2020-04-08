<h2> <?= esc($title); ?> </h2>

<?php \Config\Services::validation()->listErrors(); ?>

<div class="form-group">
    <?php echo form_open(base_url('/news/create')); ?>

    <label for="Nome">Título:</label>
    <input type="input" name="title" class="input-group-text">

    <label for="texto">Notícia:</label>
    <textarea name="body" class="input-group-text"></textarea>
    <script>
        CKEDITOR.replace( 'body' );
    </script>

    <button type="submit" class="btn btn-success" >Salvar</button>

    <?php echo form_close();?>
    <script>
        CKEDITOR.replace('body');
    </script>
</div>