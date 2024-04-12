<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissionai[]|\Cake\Collection\CollectionInterface $profissionais
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
                            <th><?= $this->Paginator->sort('nome_fantasia') ?></th>
                            <th><?= $this->Paginator->sort('razao_social') ?></th>
                            <th><?= $this->Paginator->sort('cnpj_ou_cpf') ?></th>
                            <th><?= $this->Paginator->sort('endereco') ?></th>
                            <th><?= $this->Paginator->sort('telefone') ?></th>
                            <th><?= $this->Paginator->sort('telefone2') ?></th>
                            <th><?= $this->Paginator->sort('whatsapp') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('sobre_empresa') ?></th>
                            <th><?= $this->Paginator->sort('usuarios_id') ?></th>
                            <th><?= $this->Paginator->sort('perfil') ?></th>
                            <th><?= $this->Paginator->sort('facebook') ?></th>
                            <th><?= $this->Paginator->sort('instagram') ?></th>
                            <th><?= $this->Paginator->sort('twitter') ?></th>
                            <th><?= $this->Paginator->sort('linkedin') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Opções') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($profissionais as $profissionai): ?>
        <tr>
                                                                                                                                                                                                            <td><?= $this->Number->format($profissionai->id) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->nome_fantasia) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->razao_social) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->cnpj_ou_cpf) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->endereco) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->telefone) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->telefone2) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->whatsapp) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->email) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->sobre_empresa) ?></td>
                                                                                                                                                                                    <td><?= $profissionai->has('usuario') ? $this->Html->link($profissionai->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $profissionai->usuario->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                        <td><?= h($profissionai->perfil) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->facebook) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->instagram) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->twitter) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->linkedin) ?></td>
                                                                                                                                                                                                                                                <td><?= $this->Number->format($profissionai->status) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->created) ?></td>
                                                                                                                                                                                                                                                <td><?= h($profissionai->modified) ?></td>
                                                                        <td class="actions">
                <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $profissionai->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Visualizar', 'data-toggle'=>'modal', 'data-target'=>'.view']) ?>
                <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $profissionai->id], ['escape'=>false, 'class'=>'btn btn-default', 'data-tooltip'=>'tooltip', 'title'=>'Editar']) ?>
                <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $profissionai->id], ['escape'=>false, 'class'=>'btn btn-default', 'confirm' => __('Deseja realmente excluir # {0}?', $profissionai->id), 'data-tooltip'=>'tooltip', 'title'=>'Excluir']) ?>
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

