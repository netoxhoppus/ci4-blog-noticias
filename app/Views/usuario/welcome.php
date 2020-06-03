<?php $usuarioObj = new \App\Controllers\Usuario(); ?>
<div class="container mt-4">

    <div class="row" style="align-self: center">
        <div class="textblock mt-2">
            <h3> Bem vindo <?php echo $_SESSION['nome'] . '!' ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <img class="img-fluid" src="<?php echo $_SESSION['avatar'] ?>" width="300">
        </div>

        <div class="col-sm">
            <div class="row">
                <label class="label" style="font-weight: bolder"> Nome:&nbsp </label>
                <label class="label" style="font-weight: bolder"> Nome:&nbsp </label>
                <label class="label"> <?php echo $_SESSION['nome'] ?> </label>
            </div>
            <div class="row mt-3">
                <label class="label " style="font-weight: bolder"> Nome de usuário:&nbsp </label>
                <label class="label"> <?php echo $_SESSION['username'] ?> </label>
            </div>
            <div class="row mt-3">
                <label class="label " style="font-weight: bolder"> Perfil:&nbsp </label>
                <label class="label"> <?php echo $usuarioObj->getTipoDoPerfil($_SESSION['id_perfil'])[0]['tipo'] ?> </label>
            </div>
            <div class="row mt-3">
                <label class="label" style="font-weight: bolder"> Email:&nbsp </label>
                <label class="label"> <?php echo $_SESSION['email'] ?> </label>
            </div>
            <div class="row mt-3">
                <label class="label" style="font-weight: bolder"> Sobre mim:&nbsp </label>
                <label class="label"> <?php echo $_SESSION['sobre'] ?> </label>
            </div>
            <div class="row mt-3">
                <a href="<?php echo base_url('usuario/editar/').'/'.$_SESSION['id_user']?>">
                    <button type="button" class="btn btn-primary">Editar perfil</button>
                </a>
            </div>

        </div>
    </div>

</div>