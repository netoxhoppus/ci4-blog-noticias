<!--                  -->
<div class="login-wrap mt-lg-5">
    <div class="login-html">

        <?php echo form_open(base_url('usuario/login')); ?>

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Esqueci a senha</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Usuário</label>
                    <input name="usuario" id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Senha</label>
                    <input name="senha" id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Entrar">
                </div>
                <div class="hr"></div>
            </div>
            <div class="for-pwd-htm">
                <div class="group">
                    <label for="user" class="label">Email</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Resetar Senha">
                </div>
                <div class="hr"></div>
            </div>
        </div>

        <?php echo form_close(); ?>

    </div>

<!--               -->