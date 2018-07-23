<div class="users form large-9 medium-8 columns content">
    <?php echo $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Novo usuário') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password', array('label'=>'Senha'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
