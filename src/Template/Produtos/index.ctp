<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('name','Nome do Produto') ?></th>

                <th scope="col" class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>

                <td><?= h($produto->name) ?></td>

                <td class="actions">

                    <?= $this->Html->link(__('Votar'), ['action' => 'votar', $produto->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">

            <span>  <?= $this->Paginator->prev('< ' . __('anterior')) ?></span>
            &nbsp;  - &nbsp;
            <span>  <?= $this->Paginator->next(__('próximo') . ' >') ?></span>

        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina atual <strong>{{page}}</strong> - total de páginas <strong>{{pages}}</strong>, total de registros <strong>{{count}}</strong>')]) ?></p>
    </div>
</div>
