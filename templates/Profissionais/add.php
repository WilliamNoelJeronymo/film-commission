<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissionai $profissionai
 * @var \Cake\Collection\CollectionInterface|string[] $usuarios
 * @var \Cake\Collection\CollectionInterface|string[] $servicosPrestados
 */
?>

<?= $this->Form->create($profissionai) ?>

                <?= $this->Form->control('nome_fantasia', ['class'=>'form-control']); ?>
                <?= $this->Form->control('razao_social', ['class'=>'form-control']); ?>
                <?= $this->Form->control('cnpj_ou_cpf', ['class'=>'form-control']); ?>
                <?= $this->Form->control('endereco', ['class'=>'form-control']); ?>
                <?= $this->Form->control('telefone', ['class'=>'form-control']); ?>
                <?= $this->Form->control('telefone2', ['class'=>'form-control']); ?>
                <?= $this->Form->control('whatsapp', ['class'=>'form-control']); ?>
                <?= $this->Form->control('email', ['class'=>'form-control']); ?>
                <?= $this->Form->control('sobre_empresa', ['class'=>'form-control']); ?>
                <?= $this->Form->control('usuarios_id', ['options' => $usuarios, 'class'=>'form-control']); ?>
                <?= $this->Form->control('perfil', ['class'=>'form-control']); ?>
                <?= $this->Form->control('facebook', ['class'=>'form-control']); ?>
                <?= $this->Form->control('instagram', ['class'=>'form-control']); ?>
                <?= $this->Form->control('twitter', ['class'=>'form-control']); ?>
                <?= $this->Form->control('linkedin', ['class'=>'form-control']); ?>
                <?= $this->Form->control('status', ['class'=>'form-control']); ?>
        <?= $this->Form->control('servicos_prestados._ids', ['options' => $servicosPrestados]); ?>


<div class="form-group text-right">
    <?= $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
<?= $this->Form->end() ?>


