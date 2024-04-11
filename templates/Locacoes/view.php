<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locaco $locaco
 */
?>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body view-detalhes">
                                        <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Nome Locacao') ?></strong><br>
                        <?= h($locaco->nome_locacao) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Endereco') ?></strong><br>
                        <?= h($locaco->endereco) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Cep') ?></strong><br>
                        <?= h($locaco->cep) ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Bairro') ?></strong><br>
                        <?= $locaco->has('bairro') ? $this->Html->link($locaco->bairro->id, ['controller' => 'Bairros', 'action' => 'view', $locaco->bairro->id]) : '' ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Complemento') ?></strong><br>
                        <?= h($locaco->complemento) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Responsavel') ?></strong><br>
                        <?= h($locaco->responsavel) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Email') ?></strong><br>
                        <?= h($locaco->email) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Telefone') ?></strong><br>
                        <?= h($locaco->telefone) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Telefone2') ?></strong><br>
                        <?= h($locaco->telefone2) ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Arquitetura') ?></strong><br>
                        <?= $locaco->has('arquitetura') ? $this->Html->link($locaco->arquitetura->id, ['controller' => 'Arquiteturas', 'action' => 'view', $locaco->arquitetura->id]) : '' ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Usuario') ?></strong><br>
                        <?= $locaco->has('usuario') ? $this->Html->link($locaco->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $locaco->usuario->id]) : '' ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($locaco->id) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Numero') ?></strong><br>
                    <?= $this->Number->format($locaco->numero) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Status') ?></strong><br>
                    <?= $this->Number->format($locaco->status) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Created') ?></strong><br>
                    <?= h($locaco->created) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Modified') ?></strong><br>
                    <?= h($locaco->modified) ?>
                </div>
            </div>
                
                        <div class="text">
                <strong><?= __('Caracteristicas Construcao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($locaco->caracteristicas_construcao)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Detalhes Internos') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($locaco->detalhes_internos)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Redessociais') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($locaco->redessociais)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Tipos') ?></h4>
            <?php if (!empty($locaco->tipos)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome') ?></th>
                                                    <th><?= __('Descricao') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($locaco->tipos as $tipos) : ?>
                    <tr>
                                                    <td><?= h($tipos->id) ?></td>
                                                    <td><?= h($tipos->nome) ?></td>
                                                    <td><?= h($tipos->descricao) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tipos', 'action' => 'view', $tipos->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tipos', 'action' => 'edit', $tipos->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tipos', 'action' => 'delete', $tipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipos->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>