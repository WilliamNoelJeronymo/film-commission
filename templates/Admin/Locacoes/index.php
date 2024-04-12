<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locaco[]|\Cake\Collection\CollectionInterface $locacoes
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
                            <th><?= $this->Paginator->sort('nome_locacao') ?></th>
                            <th><?= $this->Paginator->sort('endereco') ?></th>
                            <th><?= $this->Paginator->sort('cep') ?></th>
                            <th><?= $this->Paginator->sort('bairros_id') ?></th>
                            <th><?= $this->Paginator->sort('numero') ?></th>
                            <th><?= $this->Paginator->sort('complemento') ?></th>
                            <th><?= $this->Paginator->sort('caracteristicas_construcao') ?></th>
                            <th><?= $this->Paginator->sort('detalhes_internos') ?></th>
                            <th><?= $this->Paginator->sort('responsavel') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('telefone') ?></th>
                            <th><?= $this->Paginator->sort('telefone2') ?></th>
                            <th><?= $this->Paginator->sort('redessociais') ?></th>
                            <th><?= $this->Paginator->sort('arquiteturas_id') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('usuarios_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Opções') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($locacoes as $locaco): ?>
        <tr>
                                                                                                                                                                                                                                                                                                    <td><?= $this->Number->format($locaco->id) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->nome_locacao) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->endereco) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->cep) ?></td>
                                                                                                                                                                                    <td><?= $locaco->has('bairro') ? $this->Html->link($locaco->bairro->id, ['controller' => 'Bairros', 'action' => 'view', $locaco->bairro->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td><?= $this->Number->format($locaco->numero) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->complemento) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->caracteristicas_construcao) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->detalhes_internos) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->responsavel) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->email) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->telefone) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->telefone2) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->redessociais) ?></td>
                                                                                                                                                                                                                                <td><?= $locaco->has('arquitetura') ? $this->Html->link($locaco->arquitetura->id, ['controller' => 'Arquiteturas', 'action' => 'view', $locaco->arquitetura->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                                            <td><?= $this->Number->format($locaco->status) ?></td>
                                                                                                                                                                                                                                                                            <td><?= $locaco->has('usuario') ? $this->Html->link($locaco->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $locaco->usuario->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                <td><?= h($locaco->created) ?></td>
                                                                                                                                                                                                                                                                                                                                        <td><?= h($locaco->modified) ?></td>
                                                                        <td class="actions">
                <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $locaco->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Visualizar', 'data-toggle'=>'modal', 'data-target'=>'.view']) ?>
                <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $locaco->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Editar']) ?>
                <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $locaco->id], ['escape'=>false, 'class'=>'btn btn-default', 'confirm' => __('Deseja realmente excluir # {0}?', $locaco->id), 'data-tooltip'=>'tooltip', 'title'=>'Excluir']) ?>
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

