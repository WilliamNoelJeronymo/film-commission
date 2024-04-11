<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagen $imagen
 * @var string[]|\Cake\Collection\CollectionInterface $profissionais
 * @var string[]|\Cake\Collection\CollectionInterface $producoes
 * @var string[]|\Cake\Collection\CollectionInterface $noticias
 * @var string[]|\Cake\Collection\CollectionInterface $locacoes
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


