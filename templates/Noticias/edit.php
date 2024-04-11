<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
 */
?>

<?= $this->Form->create($noticia) ?>

                <?= $this->Form->control('titulo', ['class'=>'form-control']); ?>
                <?= $this->Form->control('sub_titulo', ['class'=>'form-control']); ?>
                <?= $this->Form->control('materia', ['class'=>'form-control']); ?>
                <?= $this->Form->control('destaque', ['class'=>'form-control']); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


