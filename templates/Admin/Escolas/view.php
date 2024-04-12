<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escola $escola
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
            <?= h($escola->nome) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong><?= __('Abreviacao') ?></strong><br>
            <?= h($escola->abreviacao) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong><?= __('Bairro') ?></strong><br>
            <?= h($escola->bairro) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong><?= __('Id') ?></strong><br>
            <?= $this->Number->format($escola->id) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong><?= __('Codigo') ?></strong><br>
            <?= $this->Number->format($escola->codigo) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong><?= __('Ativo') ?></strong><br>
            <?= $this->Number->format($escola->ativo) ?>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>