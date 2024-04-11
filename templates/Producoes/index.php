<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produco[]|\Cake\Collection\CollectionInterface $producoes
 */
?>

<div class="row">
    <div class="col-md-6 form-group">
        <?php echo $this->Html->link('Novo(a)', ['action' => 'add'], ['class' => 'btn btn-primary']); ?>
    </div>

    <div class="col-md-6 form-group">
        <?= $this->Form->create(null, ['type' => 'GET', 'url' => ['action' => 'index']]); ?>
        <?php $this->Form->setTemplates(['inputContainer' => '{{content}}']); ?>
        <div class="input-group">
            <?= $this->Form->control('nome', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Digite sua busca...']); ?>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Pesquisar</button>
            </div>
        </div>
        <?= $this->Form->end(); ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
        <thead>
        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('dt_producao') ?></th>
                            <th><?= $this->Paginator->sort('formato') ?></th>
                            <th><?= $this->Paginator->sort('distribuido') ?></th>
                            <th><?= $this->Paginator->sort('sinopse') ?></th>
                            <th><?= $this->Paginator->sort('genero') ?></th>
                            <th><?= $this->Paginator->sort('direcao') ?></th>
                            <th><?= $this->Paginator->sort('roteiro') ?></th>
                            <th><?= $this->Paginator->sort('produtores') ?></th>
                            <th><?= $this->Paginator->sort('obs') ?></th>
                            <th><?= $this->Paginator->sort('elenco') ?></th>
                            <th><?= $this->Paginator->sort('locacoes') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Opções') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($producoes as $produco): ?>
        <tr>
                                                                                                                            <td><?= $this->Number->format($produco->id) ?></td>
                                                                                                                                                                <td><?= h($produco->nome) ?></td>
                                                                                                                                                                <td><?= $this->Number->format($produco->dt_producao) ?></td>
                                                                                                                                                                <td><?= h($produco->formato) ?></td>
                                                                                                                                                                <td><?= h($produco->distribuido) ?></td>
                                                                                                                                                                <td><?= h($produco->sinopse) ?></td>
                                                                                                                                                                <td><?= h($produco->genero) ?></td>
                                                                                                                                                                <td><?= h($produco->direcao) ?></td>
                                                                                                                                                                <td><?= h($produco->roteiro) ?></td>
                                                                                                                                                                <td><?= h($produco->produtores) ?></td>
                                                                                                                                                                <td><?= h($produco->obs) ?></td>
                                                                                                                                                                <td><?= h($produco->elenco) ?></td>
                                                                                                                                                                <td><?= h($produco->locacoes) ?></td>
                                                                                                                                                                <td><?= h($produco->created) ?></td>
                                                                                                                                                                <td><?= h($produco->modified) ?></td>
                                                                        <td class="actions">
                <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $produco->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Visualizar', 'data-toggle'=>'modal', 'data-target'=>'.view']) ?>
                <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $produco->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Editar']) ?>
                <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $produco->id], ['escape'=>false, 'class'=>'btn btn-default', 'confirm' => __('Deseja realmente excluir # {0}?', $produco->id), 'data-tooltip'=>'tooltip', 'title'=>'Excluir']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<<') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->last('>>') ?>
    </ul>
    <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} linha(s) de um total de {{count}}, começando em {{start}}, terminado {{end}}') ?></p>
</div>

