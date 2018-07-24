<div class="container">
    <p>
    <h4 class="header-title-success">NOVO USUÁRIO &raquo;</h4>
    </p>
    <div class="jumbotron">
        <?= $this->Form->create() ?>
        <div class="form-group">
            <?php echo $this->Form->control('name', array('label'=>'Nome','class'=>'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('email', array('class'=>'form-control'));?></div>
            <div class="form-group">
            <?php echo $this->Form->control('password', array('label'=>'Senha','class'=>'form-control'));?></div>

        <?= $this->Form->button('Entrar', array('class'=>'btn btn-md btn-success')) ?>
        <?= $this->Form->end() ?>

        <br />
    </div>
</div>
