<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServicosPrestado $servicosPrestado
 * @var string[]|\Cake\Collection\CollectionInterface $profissionais
 */
?>

<?= $this->Form->create($servicosPrestado) ?>

                <?= $this->Form->control('nome', ['class'=>'form-control']); ?>
                <?= $this->Form->control('descricao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('aop', ['class'=>'form-control']); ?>
        <?= $this->Form->control('profissionais._ids', ['options' => $profissionais]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


