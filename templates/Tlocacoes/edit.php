<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tlocaco $tlocaco
 * @var string[]|\Cake\Collection\CollectionInterface $tfilmes
 */
?>

<?= $this->Form->create($tlocaco) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('imagem', ['class'=>'form-control']); ?>
                <?= $this->Form->control('texto', ['class'=>'form-control']); ?>
        <?= $this->Form->control('tfilmes._ids', ['options' => $tfilmes]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


