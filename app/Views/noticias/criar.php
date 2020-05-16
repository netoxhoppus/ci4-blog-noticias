<h2> <?= esc($title); ?> </h2>

<?php \Config\Services::validation()->listErrors(); ?>

<div class="row mt-2 ml-2"> <!-- linha 1, vai ter duas colunas-->
    <div class="col-sm"> <!--coluna 1-->
        <?php echo form_open(base_url('/noticias/criar'), 'method="post" enctype="multipart/form-data"'); ?>
        <div class="form-group">
            <?php if (isset($_SESSION['errors']['title'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li><?= esc($_SESSION['errors']['title']) ?></li>
                    </ul>
                </div>
            <?php } ?>
            <label for="Nome">Título:</label>
            <input type="input" name="title" class="input-group-lg"
                   value="<?php echo isset($new['title']) ? $new['title'] : old('title') ?>">
        </div>

        <div class="form-group  mt-4">
            <?php if (isset($_SESSION['errors']['subtitle'])) { ?>
                <div class="alert alert-danger " role="alert">
                    <ul>
                        <li><?= esc($_SESSION['errors']['subtitle']) ?></li>
                    </ul>
                </div>
            <?php } ?>
            <label for="Nome">Subtítulo:</label>
            <textarea name="subtitle"
                      class="input-group-lg "><?php echo isset($new['subtitle']) ? $new['subtitle'] : old('subtitle') ?>
            </textarea>
        </div>
    </div>
    <div class="col"> <!--aqui vai o input fotoda capa-->
        <label class="label" for="imagem de capa">Imagem de capa</label>
        <input id="capa" onclick="miniatura_foto('#capa','#img')" type="file" class="input" name="capa">

        <div class="col-sm mt-2 ml-5" id="miniatura_perfil">
            <img id="img" style="width: 300px" src="<?php echo isset($new['img_capa']) ? $new['img_capa'] : old('img_capa') ?>">
        </div>

    </div>
</div>


<div class="row mt-2 ml-2 mr-2"> <!--linha 2, só o corpo da noticia-->
    <div class="input-group-lg mt-4">
        <?php if (isset($_SESSION['errors']['body'])) { ?>
            <div class="alert alert-danger " role="alert">
                <ul>
                    <li><?= esc($_SESSION['errors']['body']) ?></li>
                </ul>
            </div>
        <?php } ?>
        <label for="texto">Notícia:</label>
        <textarea name="body" id="body"
                  class="input-group-text"
                  required="required"><?php echo isset($new['body']) ? $new['body'] : old('body') ?></textarea>
        <div class="editor">
        </div>
        <input type="hidden" name="id_news"
               value="<?php echo isset($new['id_news']) ? $new['id_news'] : old('id_news') ?>">
    </div>
</div>

<div class="row mt-2 ml-2"> <!--linha 3 , só os botões-->
<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo base_url('noticias') ?>">
        <button type="button"  class="btn btn-warning">Cancelar</button>
    </a>
</div>
</div>

<div class="form-group ml-5"> <!--scripts-->
    <?php echo form_close(); ?>

    <script>
       // initSample();


    </script>

</div>