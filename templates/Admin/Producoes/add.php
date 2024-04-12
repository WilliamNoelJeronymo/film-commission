<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produco $produco
 */
?>

<?= $this->Form->create($produco) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('dt_producao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('formato', ['class'=>'form-control']); ?>
                <?= $this->Form->control('distribuido', ['class'=>'form-control']); ?>
                <?= $this->Form->control('sinopse', ['class'=>'form-control']); ?>
                <?= $this->Form->control('genero', ['class'=>'form-control']); ?>
                <?= $this->Form->control('direcao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('roteiro', ['class'=>'form-control']); ?>
                <?= $this->Form->control('produtores', ['class'=>'form-control']); ?>
                <?= $this->Form->control('obs', ['class'=>'form-control']); ?>
                <?= $this->Form->control('elenco', ['class'=>'form-control']); ?>
                <?= $this->Form->control('locacoes', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


