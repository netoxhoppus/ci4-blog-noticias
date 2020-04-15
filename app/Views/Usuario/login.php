<div class="row mt-5 mb-3">
    <div class="col-4 offset-4 mt-5 card bg-dark">



        <!--formulario-->
        <?php echo form_open(base_url('usuario/login')); ?>
        <div class="form-group mt-4">
            <input type="text" name="usuario" class="form-control" placeholder="Usuário">
        </div>

        <div class="form-group">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
        </div>

        <div class="row">

            <div class="col-6">
                <small> <a href="<?php echo base_url('usuario/recover') ?>">Esqueci a senha </a></small>
            </div>

            <div class="col-6 text-right">
                <div class="form-group text-right">
                    <input type="submit" value="Entrar" class="btn btn-success">
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
        <!--alert de erro-->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-2 text-center" id="erro_mensagem">
                <?php echo $error ?>
            </div>
        <?php endif; ?>
    </div>

</div>
