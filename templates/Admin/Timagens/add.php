<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Timagen $timagen
 * @var \Cake\Collection\CollectionInterface|string[] $tfilmes
 */
?>

<?= $this->Form->create($timagen) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('tfilmes_id', ['options' => $tfilmes, 'class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


