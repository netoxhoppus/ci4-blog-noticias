<h2 class="h2 mb-4"> Novo Usuário</h2>
<?php
echo form_open(base_url('usuario/criarUsuario'));
?>
<div class="container ">
    <div class="row">
        <div class="col-sm col-4">
            <label class="label">Nome</label>
            <input class="form-control " type="text" name="nome">

            <label class="label">Username</label>
            <input class="form-control" type="text" name="nome">

            <label class="label ">Senha</label>
            <input class="form-control" type="password" name="nome">

            <label class="label">Email</label>
            <input class="form-control " type="email" name="nome">

            <label class="label mr-2">Avatar</label>
            <input class="form-control" type="file" name="nome" id="upload">

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="<?php echo base_url('usuario/listarusuarios') ?>">
                    <button type="button" class="btn btn-warning">Cancelar</button>
                </a>
            </div>
        </div>
        <div class="col-sm ml-5" id="miniatura_perfil">
            <img id="prev">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
