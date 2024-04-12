<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagen $imagen
 * @var \Cake\Collection\CollectionInterface|string[] $profissionais
 * @var \Cake\Collection\CollectionInterface|string[] $producoes
 * @var \Cake\Collection\CollectionInterface|string[] $noticias
 * @var \Cake\Collection\CollectionInterface|string[] $locacoes
 */
?>

<?= $this->Form->create($imagen) ?>

                <?= $this->Form->control('profissionais_id', ['options' => $profissionais, 'empty' => true, 'class'=>'form-control']); ?>
                <?= $this->Form->control('producoes_id', ['options' => $producoes, 'empty' => true, 'class'=>'form-control']); ?>
                <?= $this->Form->control('noticias_id', ['options' => $noticias, 'empty' => true, 'class'=>'form-control']); ?>
                <?= $this->Form->control('imagem', ['class'=>'form-control']); ?>
                <?= $this->Form->control('locacoes_id', ['options' => $locacoes, 'empty' => true, 'class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


