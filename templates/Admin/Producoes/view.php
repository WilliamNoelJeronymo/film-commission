<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produco $produco
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
                        <?= h($produco->nome) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Formato') ?></strong><br>
                        <?= h($produco->formato) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Distribuido') ?></strong><br>
                        <?= h($produco->distribuido) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Genero') ?></strong><br>
                        <?= h($produco->genero) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Direcao') ?></strong><br>
                        <?= h($produco->direcao) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Roteiro') ?></strong><br>
                        <?= h($produco->roteiro) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($produco->id) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Dt Producao') ?></strong><br>
                    <?= $this->Number->format($produco->dt_producao) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Created') ?></strong><br>
                    <?= h($produco->created) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Modified') ?></strong><br>
                    <?= h($produco->modified) ?>
                </div>
            </div>
                
                        <div class="text">
                <strong><?= __('Sinopse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produco->sinopse)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Produtores') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produco->produtores)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Obs') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produco->obs)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Elenco') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produco->elenco)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Locacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produco->locacoes)); ?>
                </blockquote>
            </div>
                    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>