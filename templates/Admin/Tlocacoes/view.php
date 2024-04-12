<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tlocaco $tlocaco
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
                        <?= h($tlocaco->nome) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Imagem') ?></strong><br>
                        <?= h($tlocaco->imagem) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($tlocaco->id) ?>
                </div>
            </div>
                    
                        <div class="text">
                <strong><?= __('Texto') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tlocaco->texto)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Tfilmes') ?></h4>
            <?php if (!empty($tlocaco->tfilmes)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome') ?></th>
                                                    <th><?= __('Texto') ?></th>
                                                    <th><?= __('Ficha Tecnica') ?></th>
                                                    <th><?= __('Ano') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($tlocaco->tfilmes as $tfilmes) : ?>
                    <tr>
                                                    <td><?= h($tfilmes->id) ?></td>
                                                    <td><?= h($tfilmes->nome) ?></td>
                                                    <td><?= h($tfilmes->texto) ?></td>
                                                    <td><?= h($tfilmes->ficha_tecnica) ?></td>
                                                    <td><?= h($tfilmes->ano) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tfilmes', 'action' => 'view', $tfilmes->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tfilmes', 'action' => 'edit', $tfilmes->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tfilmes', 'action' => 'delete', $tfilmes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tfilmes->id)]) ?>
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