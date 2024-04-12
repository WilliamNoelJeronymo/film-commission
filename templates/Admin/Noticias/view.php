<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
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
                        <strong><?= __('Titulo') ?></strong><br>
                        <?= h($noticia->titulo) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Sub Titulo') ?></strong><br>
                        <?= h($noticia->sub_titulo) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($noticia->id) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Created') ?></strong><br>
                    <?= h($noticia->created) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Modified') ?></strong><br>
                    <?= h($noticia->modified) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Destaque') ?></strong><br>
                    <?= $noticia->destaque ? __('Yes') : __('No'); ?>
                </div>
            </div>
            
                        <div class="text">
                <strong><?= __('Materia') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($noticia->materia)); ?>
                </blockquote>
            </div>
                    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>