<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

        <p><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Tem certeza que deseja excluir?', $produto->id)]
            )
        ?></p>
        <p><?= $this->Html->link(__('Todos Produtos'), ['action' => 'index']) ?></p>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Alterar Produto') ?></legend>
        <?php
            echo $this->Form->control('name',array('label' => 'Nome do Produto'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
