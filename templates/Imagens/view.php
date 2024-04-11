<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagen $imagen
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
                        <?= $imagen->has('profissionai') ? $this->Html->link($imagen->profissionai->id, ['controller' => 'Profissionais', 'action' => 'view', $imagen->profissionai->id]) : '' ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Produco') ?></strong><br>
                        <?= $imagen->has('produco') ? $this->Html->link($imagen->produco->id, ['controller' => 'Producoes', 'action' => 'view', $imagen->produco->id]) : '' ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Noticia') ?></strong><br>
                        <?= $imagen->has('noticia') ? $this->Html->link($imagen->noticia->id, ['controller' => 'Noticias', 'action' => 'view', $imagen->noticia->id]) : '' ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Imagem') ?></strong><br>
                        <?= h($imagen->imagem) ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Locaco') ?></strong><br>
                        <?= $imagen->has('locaco') ? $this->Html->link($imagen->locaco->id, ['controller' => 'Locacoes', 'action' => 'view', $imagen->locaco->id]) : '' ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($imagen->id) ?>
                </div>
            </div>
                    
            </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>