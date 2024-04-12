<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipo $tipo
 * @var \Cake\Collection\CollectionInterface|string[] $locacoes
 */
?>

<?= $this->Form->create($tipo) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('descricao', ['class'=>'form-control']); ?>
        <?= $this->Form->control('locacoes._ids', ['options' => $locacoes]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


