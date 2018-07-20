<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Novo usuário') ?></legend>
        <?php
        echo $this->Form->control('Nome Completo');
            echo $this->Form->control('email');
            echo $this->Form->control('password', array('label'=>'Senha'));
        echo $this->Form->control('password_confirm', array('label'=>'Confirmar Senha'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
