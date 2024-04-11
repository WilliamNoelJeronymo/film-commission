<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tfilme $tfilme
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
                        <?= h($tfilme->nome) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($tfilme->id) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Ano') ?></strong><br>
                    <?= $this->Number->format($tfilme->ano) ?>
                </div>
            </div>
                    
                        <div class="text">
                <strong><?= __('Texto') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tfilme->texto)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Ficha Tecnica') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tfilme->ficha_tecnica)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Tlocacoes') ?></h4>
            <?php if (!empty($tfilme->tlocacoes)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome') ?></th>
                                                    <th><?= __('Imagem') ?></th>
                                                    <th><?= __('Texto') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($tfilme->tlocacoes as $tlocacoes) : ?>
                    <tr>
                                                    <td><?= h($tlocacoes->id) ?></td>
                                                    <td><?= h($tlocacoes->nome) ?></td>
                                                    <td><?= h($tlocacoes->imagem) ?></td>
                                                    <td><?= h($tlocacoes->texto) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tlocacoes', 'action' => 'view', $tlocacoes->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tlocacoes', 'action' => 'edit', $tlocacoes->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tlocacoes', 'action' => 'delete', $tlocacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tlocacoes->id)]) ?>
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