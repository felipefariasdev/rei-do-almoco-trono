<div class="container">
    <h2><?= __('PRODUTOS') ?></h2>
    <table class="table table-striped">
        <thead>
            <tr>

                <th><?= $this->Paginator->sort('name','NOME') ?></th>

                <th class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>

                <td><?= h($produto->name) ?></td>

                <td class="actions">

                    <strong><?= $this->Html->link(__('Votar'), ['action' => 'votar', $produto->id]) ?></strong>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">

            <span>  <?= $this->Paginator->prev('< ' . __('anterior')) ?><?= $this->Paginator->next(__('próximo') . ' >') ?></span>

        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina atual <strong>{{page}}</strong> - total de páginas <strong>{{pages}}</strong>, total de registros <strong>{{count}}</strong>')]) ?></p>
    </div>
</div>
