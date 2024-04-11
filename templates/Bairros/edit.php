<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bairro $bairro
 */
?>

<?= $this->Form->create($bairro) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


