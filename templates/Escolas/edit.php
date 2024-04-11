<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escola $escola
 */
?>

<?= $this->Form->create($escola) ?>

                <?= $this->Form->control('codigo', ['class'=>'form-control']); ?>
                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('abreviacao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('bairro', ['class'=>'form-control']); ?>
                <?= $this->Form->control('ativo', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


