<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var \Cake\Collection\CollectionInterface|string[] $grupos
 */
?>

<?= $this->Form->create($usuario) ?>

                <?= $this->Form->control('grupos_id', ['options' => $grupos, 'class'=>'form-control']); ?>
                <?= $this->Form->control('ativo', ['class'=>'form-control']); ?>
                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('email', ['class'=>'form-control']); ?>
                <?= $this->Form->control('telefone', ['class'=>'form-control']); ?>
                <?= $this->Form->control('senha', ['class'=>'form-control']); ?>
                <?= $this->Form->control('token', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


