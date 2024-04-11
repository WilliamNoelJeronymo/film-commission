<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipo $tipo
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
                        <strong><?= __('Nome') ?></strong><br>
                        <?= h($tipo->nome) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($tipo->id) ?>
                </div>
            </div>
                    
                        <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tipo->descricao)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Locacoes') ?></h4>
            <?php if (!empty($tipo->locacoes)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome Locacao') ?></th>
                                                    <th><?= __('Endereco') ?></th>
                                                    <th><?= __('Cep') ?></th>
                                                    <th><?= __('Bairros Id') ?></th>
                                                    <th><?= __('Numero') ?></th>
                                                    <th><?= __('Complemento') ?></th>
                                                    <th><?= __('Caracteristicas Construcao') ?></th>
                                                    <th><?= __('Detalhes Internos') ?></th>
                                                    <th><?= __('Responsavel') ?></th>
                                                    <th><?= __('Email') ?></th>
                                                    <th><?= __('Telefone') ?></th>
                                                    <th><?= __('Telefone2') ?></th>
                                                    <th><?= __('Redessociais') ?></th>
                                                    <th><?= __('Arquiteturas Id') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Usuarios Id') ?></th>
                                                    <th><?= __('Created') ?></th>
                                                    <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($tipo->locacoes as $locacoes) : ?>
                    <tr>
                                                    <td><?= h($locacoes->id) ?></td>
                                                    <td><?= h($locacoes->nome_locacao) ?></td>
                                                    <td><?= h($locacoes->endereco) ?></td>
                                                    <td><?= h($locacoes->cep) ?></td>
                                                    <td><?= h($locacoes->bairros_id) ?></td>
                                                    <td><?= h($locacoes->numero) ?></td>
                                                    <td><?= h($locacoes->complemento) ?></td>
                                                    <td><?= h($locacoes->caracteristicas_construcao) ?></td>
                                                    <td><?= h($locacoes->detalhes_internos) ?></td>
                                                    <td><?= h($locacoes->responsavel) ?></td>
                                                    <td><?= h($locacoes->email) ?></td>
                                                    <td><?= h($locacoes->telefone) ?></td>
                                                    <td><?= h($locacoes->telefone2) ?></td>
                                                    <td><?= h($locacoes->redessociais) ?></td>
                                                    <td><?= h($locacoes->arquiteturas_id) ?></td>
                                                    <td><?= h($locacoes->status) ?></td>
                                                    <td><?= h($locacoes->usuarios_id) ?></td>
                                                    <td><?= h($locacoes->created) ?></td>
                                                    <td><?= h($locacoes->modified) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Locacoes', 'action' => 'view', $locacoes->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Locacoes', 'action' => 'edit', $locacoes->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Locacoes', 'action' => 'delete', $locacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locacoes->id)]) ?>
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