
<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="modal"
                                            data-target="#exampleModal"
                                            href="<?php echo base_url('usuario/logout') ?>">
        <i style="color: #22ff16" class="fa fa-power-off">&nbsp</i><?php echo $_SESSION['nome']; ?>
    </a>
</li>
<li class="nav-item" role="presentation">
    <a>
        <?php echo '|' ?>
    </a>
</li>
<li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('login') ?>">
        <i style="color: #ff0017" class="fa fa-cogs"></i> Área do adm</a>
</li>
