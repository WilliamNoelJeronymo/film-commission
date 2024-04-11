<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portifolio $portifolio
 * @var string[]|\Cake\Collection\CollectionInterface $profissionais
 */
?>

<?= $this->Form->create($portifolio) ?>

                <?= $this->Form->control('profissionais_id', ['options' => $profissionais, 'empty' => true, 'class'=>'form-control']); ?>
                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


