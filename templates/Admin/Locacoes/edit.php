<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locaco $locaco
 * @var string[]|\Cake\Collection\CollectionInterface $bairros
 * @var string[]|\Cake\Collection\CollectionInterface $arquiteturas
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 * @var string[]|\Cake\Collection\CollectionInterface $tipos
 */
?>

<?= $this->Form->create($locaco) ?>

                <?= $this->Form->control('nome_locacao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('endereco', ['class'=>'form-control']); ?>
                <?= $this->Form->control('cep', ['class'=>'form-control']); ?>
                <?= $this->Form->control('bairros_id', ['options' => $bairros, 'class'=>'form-control']); ?>
                <?= $this->Form->control('numero', ['class'=>'form-control']); ?>
                <?= $this->Form->control('complemento', ['class'=>'form-control']); ?>
                <?= $this->Form->control('caracteristicas_construcao', ['class'=>'form-control']); ?>
                <?= $this->Form->control('detalhes_internos', ['class'=>'form-control']); ?>
                <?= $this->Form->control('responsavel', ['class'=>'form-control']); ?>
                <?= $this->Form->control('email', ['class'=>'form-control']); ?>
                <?= $this->Form->control('telefone', ['class'=>'form-control']); ?>
                <?= $this->Form->control('telefone2', ['class'=>'form-control']); ?>
                <?= $this->Form->control('redessociais', ['class'=>'form-control']); ?>
                <?= $this->Form->control('arquiteturas_id', ['options' => $arquiteturas, 'class'=>'form-control']); ?>
                <?= $this->Form->control('status', ['class'=>'form-control']); ?>
                <?= $this->Form->control('usuarios_id', ['options' => $usuarios, 'class'=>'form-control']); ?>
        <?= $this->Form->control('tipos._ids', ['options' => $tipos]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


