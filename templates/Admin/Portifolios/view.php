<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portifolio $portifolio
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
                        <strong><?= __('Profissionai') ?></strong><br>
                        <?= $portifolio->has('profissionai') ? $this->Html->link($portifolio->profissionai->id, ['controller' => 'Profissionais', 'action' => 'view', $portifolio->profissionai->id]) : '' ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Nome') ?></strong><br>
                        <?= h($portifolio->nome) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($portifolio->id) ?>
                </div>
            </div>
                    
            </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>