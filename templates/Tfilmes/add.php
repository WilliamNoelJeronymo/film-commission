<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tfilme $tfilme
 * @var \Cake\Collection\CollectionInterface|string[] $tlocacoes
 */
?>

<?= $this->Form->create($tfilme) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('texto', ['class'=>'form-control']); ?>
                <?= $this->Form->control('ficha_tecnica', ['class'=>'form-control']); ?>
                <?= $this->Form->control('ano', ['class'=>'form-control']); ?>
        <?= $this->Form->control('tlocacoes._ids', ['options' => $tlocacoes]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


