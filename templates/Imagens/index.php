<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagen[]|\Cake\Collection\CollectionInterface $imagens
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
                            <th><?= $this->Paginator->sort('profissionais_id') ?></th>
                            <th><?= $this->Paginator->sort('producoes_id') ?></th>
                            <th><?= $this->Paginator->sort('noticias_id') ?></th>
                            <th><?= $this->Paginator->sort('imagem') ?></th>
                            <th><?= $this->Paginator->sort('locacoes_id') ?></th>
                        <th class="actions"><?= __('Opções') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($imagens as $imagen): ?>
        <tr>
                                                                                                                                                                                                                                                                                                                                                <td><?= $this->Number->format($imagen->id) ?></td>
                                                                                                                                                                                    <td><?= $imagen->has('profissionai') ? $this->Html->link($imagen->profissionai->id, ['controller' => 'Profissionais', 'action' => 'view', $imagen->profissionai->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                            <td><?= $imagen->has('produco') ? $this->Html->link($imagen->produco->id, ['controller' => 'Producoes', 'action' => 'view', $imagen->produco->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                            <td><?= $imagen->has('noticia') ? $this->Html->link($imagen->noticia->id, ['controller' => 'Noticias', 'action' => 'view', $imagen->noticia->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($imagen->imagem) ?></td>
                                                                                                                                                                                                                                                                                                                        <td><?= $imagen->has('locaco') ? $this->Html->link($imagen->locaco->id, ['controller' => 'Locacoes', 'action' => 'view', $imagen->locaco->id]) : '' ?></td>
                                                                                                                <td class="actions">
                <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $imagen->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Visualizar', 'data-toggle'=>'modal', 'data-target'=>'.view']) ?>
                <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $imagen->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Editar']) ?>
                <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $imagen->id], ['escape'=>false, 'class'=>'btn btn-default', 'confirm' => __('Deseja realmente excluir # {0}?', $imagen->id), 'data-tooltip'=>'tooltip', 'title'=>'Excluir']) ?>
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

