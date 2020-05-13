<h2 class="h2 mb-4"> Novo Usuário</h2>
<?php
echo form_open(base_url('usuario/criarusuario'),'enctype="multipart/form-data"');
?>
<div class="container ">
    <div class="row">
        <div class="col-sm col-4">
            <label class="label">Nome</label>
            <input class="form-control " type="text" name="nome">

            <label class="label">Username</label>
            <input class="form-control" type="text" name="username">

            <label class="label ">Senha</label>
            <input class="form-control" type="password" name="password">

            <label class="label">Email</label>
            <input class="form-control " type="email" name="email">


            <label class="label mr-2">perfil</label>
            <input type="number" name="perfil" class="form-control" placeholder="coloque 1">


            <label class="label mr-2">Avatar</label>
            <input class="form-control" type="file" name="avatar" id="upload">


            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="<?php echo base_url('usuario/listarusuarios') ?>">
                    <button type="button" class="btn btn-warning">Cancelar</button>
                </a>
            </div>

        </div>

        <div class="col-sm ml-5" id="miniatura_perfil">
            <img id="prev" style="width: 300px">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
:
<script !src="">
    $(function () { /*cria miniatura da imagem*/
        $('#upload').change(function () {
            const file = $(this)[0].files[0]
            const fielder = new FileReader()
            fielder.onloadend = function () {
                $('#prev').attr('src', fielder.result)
            }
            fielder.readAsDataURL(file)
        })
    });
</script>