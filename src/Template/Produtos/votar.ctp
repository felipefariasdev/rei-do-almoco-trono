<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('CONFIRMAR VOTO') ?></h3>
    <span scope="col"><strong><?= $this->Paginator->sort('name','NOME DO ITEM') ?>:</strong> <?php echo $produto->name; ?></span> <br />
    <span scope="col"><strong><?= $this->Paginator->sort('name','USUÁRIO LOGADO') ?>:</strong> <?php echo $usuario['name']; ?></span>



    <p><br />
        <a class="btn btn-md btn-success" href="/votos/confirmarVoto/<?php echo $usuario['id']; ?>/<?php echo $produto->id; ?>" role="button">CONFIRMAR &raquo;</a>
    </p>

</div>







