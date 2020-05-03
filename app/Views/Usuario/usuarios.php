
<div class="list-inline mb-2">
    <div class="float-left mt-2">
        <a href="<?php echo base_url('/usuario/criarusuario') ?>">
            <button class="btn btn-outline-primary">Criar Usuário</button>
        </a>
    </div>
</div>
<?php if (!empty($users) && is_array($users)) : ?>
    <div class="table">
        <table id="datatable" class="table table-striped table-hover table-sm">

            <tr class="table table-active">
                <th>Usuário</th>
                <th>Ação</th>
            </tr>

            <?php foreach ($users as $users_item): ?>
                <tr>
                    <td> <?php echo $users_item['nome'] ?></td>

                    <td>
                        <p>

                            <button class="btn col-2 btn-warning btn-sm">Editar</button>

                            <!--<a href="<?php /*echo base_url() . '/noticias/editar/' . $news_item['id'] */ ?>">
                                <button class="btn col-2 btn-warning btn-sm">Editar</button>
                            </a>

                            <a href="<?php /*echo base_url() . '/noticias/excluir/' . $news_item['id'] */ ?>">
                                <button class="btn col-2 btn-danger btn-sm" onclick="confirm_delete()">Deletar</button>
                            </a>-->


                        </p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="float-right pagination" id="pager">
            <?php /*if ($pager) : */ ?><!--
                <?php /*$pager->setPath('usuarios'); */ ?>
                <? /*= $pager->links() */ ?>
            --><?php /*endif */ ?>
        </div>


    </div>

<?php else : ?>
    <h3>[Nenhum usuário]</h3>
<?php endif ?>