<h2 class="h2 mb-4"><?php echo $title?></h2>
<?php $user = new \App\Controllers\Usuario();
\Config\Services::validation()->listErrors(); ?>

<?php
//dd($usu);
echo form_open(base_url('usuario/criarusuario'), 'enctype="multipart/form-data"'); ?>

<div class="container ">
    <div class="row">

        <div class="col-sm col-4 mt-3">

            <div class="input mb-2 mt-3">
                <?php if (isset($_SESSION['errors']['nome'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <li><?= esc($_SESSION['errors']['nome']) ?></li>
                        </ul>
                    </div>
                <?php } ?>
                <label class="label mt-2">Nome</label>
                <input class="form-control" type="text" name="nome"
                       value="<?php echo isset($usu['nome']) ? $usu['nome'] : old('nome') ?>">
            </div>

            <div class="input mb-2 mt-3">
                <?php if (isset($_SESSION['errors']['username'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <li><?= esc($_SESSION['errors']['username']) ?></li>
                        </ul>
                    </div>
                <?php } ?>
                <label class="label mt-3">Username</label>
                <input class="form-control" type="text" name="username"
                       value="<?php echo isset($usu['username']) ? $usu['username'] : old('username') ?>">
            </div>

            <div class="input mb-2 mt-3">
                <?php if (isset($_SESSION['errors']['password'])) { ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <ul>
                            <li><?= esc($_SESSION['errors']['password']) ?></li>
                        </ul>
                    </div>
                <?php } ?>
                <label class="label mt-3">Senha</label>
                <input class="form-control" type="password" name="password">
            </div>


            <div class="input mb-2 mt-3">
                <?php if (isset($_SESSION['errors']['email'])) { ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <ul>
                            <li><?= esc($_SESSION['errors']['email']) ?></li>
                        </ul>
                    </div>
                <?php } ?>
                <label class="label mt-3">Email</label>
                <input class="form-control " type="email" name="email"
                       value="<?php echo isset($usu['email']) ? $usu['email'] : old('email') ?>">
            </div>

            <div class="input mb-2 mt-3">
                <?php if (isset($_SESSION['errors']['perfil'])) { ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <ul>
                            <li><?= esc($_SESSION['errors']['perfil']) ?></li>
                        </ul>
                    </div>
                <?php } ?>
                <label class="label mt-3" <?php echo !$user->ehAdmin() ? 'hidden' : ''; ?> >perfil</label>
                <select name="perfil" required <?php echo !$user->ehAdmin() ? 'hidden' : ''; ?>>
                    <option value="">Selecione...</option>
                    <?php foreach ($user->getPerfis() as $tipo): ?>
                        <option value="<?php echo $tipo['id_profile']?>"
                        <?php
                        $id = isset($usu['id_perfil']) ? $usu['id_perfil'] : '';
                        if ($id) {
                            echo $id == $tipo['id_profile'] ?   ' selected ' : '';
                        }
                        echo '>';
                        echo $tipo['tipo'];
                        ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

        <div class="col-sm col-4 mt-2">
            <div class="row">
                <label class="label mr-2">Avatar</label>
                <input class="input" onclick="miniatura_foto('#upload','#prev')" type="file" name="avatar"
                       id="upload">
            </div>
            <div class="row mt-3">
                <div class="col-sm ml-5 mt-1 img-thumbnail" id="miniatura_perfil">
                    <img id="prev" class="img-fluid" style="width: 400px;max-width: 100%; height: auto"
                         src="<?php echo isset($usu['avatar']) ? $usu['avatar'] : old('avatar') ?>">
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-2">

        <div class="col-sm mt-3">
            <label class="label">Sobre</label>
            <textarea class="form-control " type="text" name="sobre"
                      id="body"><?php echo isset($usu['sobre']) ? $usu['sobre'] : old('sobre') ?></textarea>
        </div>

    </div>

    <div class="row ">

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="<?php echo base_url('usuario/listarusuarios') ?>">
                <button type="button" class="btn btn-warning">Cancelar</button>
            </a>
        </div>

    </div>
</div>
<input type="hidden" name="id_user" value="<?php echo isset($usu['id_user']) ? $usu['id_user'] : old('id_user') ?>">
<?php echo form_close(); ?>

<!--<div class="input mb-2 mt-3">
    <label class="label mt-3">perfil</label>
    <select name="perfil" required disabled>
        <option value="">Selecione...</option>
        <option  value="1">Administrador</option>
        <option value="2" selected> Colunista </option>
    </select>
</div>-->